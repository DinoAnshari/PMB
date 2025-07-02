<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Jobs\KirimPesanKelulusanJob;
use App\Jobs\KirimPesanTidakLulusJob;
use App\Models\AchievementTrack;
use App\Models\AffirmationTrack;
use App\Models\DomicileTrack;
use App\Models\MessageStatus;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;

class BroadcastController extends Controller
{
    protected array $trackModels = [
        'prestasi' => AchievementTrack::class,
        'afirmasi' => AffirmationTrack::class,
        'domisili' => DomicileTrack::class,
    ];

    /**
     * Menampilkan halaman broadcast berdasarkan jalur dan status kelulusan.
     */
    public function index(string $jalur, string $status)
    {
        $user = Auth::user();
        $trackModel = $this->trackModels[$jalur] ?? null;

        if (!$trackModel) {
            abort(404, 'Jalur tidak ditemukan.');
        }

        $tracks = $trackModel::with(['user.biodata', 'user.sekolah'])
            ->whereHas('statusPendaftaran', fn($q) => $q->where('status', $status))
            ->when(!$user->hasRole('super admin'), fn($query) =>
                $query->whereHas('user', fn($q) => $q->where('sekolah_id', $user->sekolah_id))
            )
            ->get();

        $trackIds = $tracks->pluck('id');

        $pesanStatuses = MessageStatus::whereNotNull('status')
            ->where('jalur_type', $jalur)
            ->whereIn('jalur_id', $trackIds)
            ->latest()
            ->get();

        $view = "back.superadmin.broadcast." . (strtolower($status) === 'lulus' ? 'lulus' : 'tidak-lulus') . ".{$jalur}.index";
        ${$jalur . 's'} = $tracks;

        return view($view, compact("{$jalur}s", 'pesanStatuses'));
    }

    /**
     * Mengirim pesan broadcast ke semua siswa (Lulus/Tidak Lulus) pada jalur tertentu.
     */
    public function kirimPesan(string $jalur, string $status)
    {
        $user = Auth::user();
        $trackModel = $this->trackModels[$jalur] ?? null;

        if (!$trackModel) {
            abort(404, 'Jalur tidak ditemukan.');
        }

        $tracks = $trackModel::with(['user.biodata.parent', 'user.sekolah'])
            ->whereHas('statusPendaftaran', fn($q) => $q->where('status', $status))
            ->when(!$user->hasRole('super admin'), fn($query) =>
                $query->whereHas('user', fn($q) => $q->where('sekolah_id', $user->sekolah_id))
            )
            ->get();

        $this->dispatchPesan($tracks, $jalur, $status === 'Lulus');

        return redirect()->route("broadcast.{$jalur}." . strtolower(str_replace(' ', '', $status)))
            ->with([
                'success' => "Pesan berhasil dikirim ke seluruh siswa yang " . strtolower($status) . ".",
                'type' => 'bootstrap-toast',
            ]);
    }

    /**
     * Method bantu untuk mengirim job queue dan simpan status pesan.
     */
    private function dispatchPesan(Collection $tracks, string $jalur, bool $lulus = true)
    {
        $batchDelay = 0;
        $siswaPerBatch = 10;

        foreach ($tracks->chunk($siswaPerBatch) as $batch) {
            foreach ($batch as $index => $track) {
                $siswa = $track->user;
                $noHpOrtu = $siswa->biodata?->parent?->no_hp;

                if (!$noHpOrtu) {
                    continue;
                }

                $nama = $siswa->name;
                $sekolah = $siswa->sekolah?->nama_sekolah ?? '-';

                MessageStatus::create([
                    'user_id'    => $siswa->id,
                    'nama_siswa' => $nama,
                    'no_hp'      => $noHpOrtu,
                    'sekolah'    => $sekolah,
                    'status'     => 'pending',
                    'jalur_id'   => $track->id,
                    'jalur_type' => $jalur,
                ]);

                $delayDetik = ($batchDelay * 60) + ($index * 60);

                $job = $lulus
                    ? new KirimPesanKelulusanJob($nama, $noHpOrtu, $sekolah)
                    : new KirimPesanTidakLulusJob($nama, $noHpOrtu, $sekolah);

                Bus::dispatch($job->delay(now()->addSeconds($delayDetik)));
            }

            $batchDelay += 10;
        }
    }
}
