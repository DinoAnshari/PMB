<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\AchievementTrack;
use App\Exports\PrestasiStatusLulusExport;
use App\Exports\PrestasiStatusTidakLulusExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class AchievementController extends Controller
{
    /**
     * Menampilkan daftar siswa jalur prestasi yang lolos verifikasi berkas,
     * diurutkan berdasarkan nilai rata-rata keseluruhan secara menurun.
     */
    public function index()
    {
        $achievementTracks = AchievementTrack::with('user')
            ->whereHas('statusBerkas', function ($query) {
                $query->where('status', 'Lulus Berkas');
            })
            ->orderByDesc('rata_rata_keseluruhan')
            ->get();

        return view('back.superadmin.daftar-jalur.prestasi.index', compact('achievementTracks'));
    }

    /**
     * Memperbarui status pendaftaran siswa pada jalur prestasi.
     */
    public function updateStatusPrestasi(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $achievementTrack = AchievementTrack::findOrFail($id);

        $achievementTrack->statusPendaftaran()->updateOrCreate(
            [
                'pendaftaran_id' => $id,
                'pendaftaran_type' => AchievementTrack::class,
            ],
            [
                'jalur' => 'Prestasi',
                'status' => $request->input('status'),
            ]
        );

        return redirect()->back()->with([
            'success' => 'Status pendaftaran Jalur Prestasi berhasil diperbarui!',
            'type' => 'bootstrap-toast',
        ]);
    }

    /**
     * Menampilkan detail siswa jalur prestasi, termasuk user, orang tua, dan wali.
     */
    public function show($id)
    {
        $achievementTrack = AchievementTrack::with([
            'user',
            'student.parent',
            'student.guardian',
        ])->findOrFail($id);

        return view('back.superadmin.daftar-jalur.prestasi.show', compact('achievementTrack'));
    }

    /**
     * Generate dan tampilkan PDF siswa prestasi dengan status "Lulus".
     */
    public function downloadPdfLulus()
    {
        $achievementTracks = AchievementTrack::with('user')
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Lulus');
            })
            ->get();

        $pdf = Pdf::loadView('back.superadmin.daftar-jalur.prestasi.siswa_lulus', compact('achievementTracks'));

        return $pdf->stream('data_prestasi_lulus.pdf');
    }

    /**
     * Generate dan tampilkan PDF siswa prestasi dengan status "Tidak Lulus".
     */
    public function downloadPdfTidakLulus()
    {
        $achievementTracks = AchievementTrack::with('user')
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Tidak Lulus');
            })
            ->get();

        $pdf = Pdf::loadView('back.superadmin.daftar-jalur.prestasi.siswa_tidak_lulus', compact('achievementTracks'));

        return $pdf->stream('data_prestasi_tidak_lulus.pdf');
    }

    /**
     * Ekspor data siswa jalur prestasi yang Lulus ke Excel.
     */
    public function downloadExcelPrestasiLulus()
    {
        $achievementTracks = AchievementTrack::with(['user.biodata', 'user.sekolah'])
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Lulus');
            })
            ->get();

        return Excel::download(new PrestasiStatusLulusExport($achievementTracks), 'daftar_prestasi_lulus_semua.xlsx');
    }

    /**
     * Ekspor data siswa jalur prestasi yang Tidak Lulus ke Excel.
     */
    public function downloadExcelPrestasiTidakLulus()
    {
        $achievementTracks = AchievementTrack::with(['user.biodata', 'user.sekolah'])
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Tidak Lulus');
            })
            ->get();

        return Excel::download(new PrestasiStatusTidakLulusExport($achievementTracks), 'daftar_prestasi_tidak_lulus_semua.xlsx');
    }
}
