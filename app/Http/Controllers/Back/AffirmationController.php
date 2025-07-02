<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\AffirmationTrack;
use App\Exports\AfirmasiStatusLulusExport;
use App\Exports\AfirmasiStatusTidakLulusExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class AffirmationController extends Controller
{
    /**
     * Menampilkan daftar siswa jalur afirmasi yang lolos verifikasi berkas,
     * diurutkan berdasarkan nilai rata-rata keseluruhan secara menurun.
     */
    public function index()
    {
        $affirmationTracks = AffirmationTrack::with('user')
            ->whereHas('statusBerkas', function ($query) {
                $query->where('status', 'Lulus Berkas');
            })
            ->orderByDesc('rata_rata_keseluruhan')
            ->get();

        return view('back.superadmin.daftar-jalur.afirmasi.index', compact('affirmationTracks'));
    }

    /**
     * Memperbarui status pendaftaran siswa pada jalur afirmasi.
     */
    public function updateStatusAfirmasi(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $affirmationTrack = AffirmationTrack::findOrFail($id);

        $affirmationTrack->statusPendaftaran()->updateOrCreate(
            [
                'pendaftaran_id' => $id,
                'pendaftaran_type' => AffirmationTrack::class,
            ],
            [
                'jalur' => 'Afirmasi',
                'status' => $request->input('status'),
            ]
        );

        return redirect()->back()->with([
            'success' => 'Status pendaftaran Jalur Afirmasi berhasil diperbarui!',
            'type' => 'bootstrap-toast',
        ]);
    }

    /**
     * Menampilkan detail siswa jalur afirmasi, termasuk user, orang tua, dan wali.
     */
    public function show($id)
    {
        $affirmationTrack = AffirmationTrack::with([
            'user',
            'student.parent',
            'student.guardian',
        ])->findOrFail($id);

        return view('back.superadmin.daftar-jalur.afirmasi.show', compact('affirmationTrack'));
    }

    /**
     * Generate dan tampilkan PDF siswa afirmasi dengan status "Lulus".
     */
    public function downloadPdfLulus()
    {
        $affirmationTracks = AffirmationTrack::with('user')
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Lulus');
            })
            ->get();

        $pdf = Pdf::loadView('back.superadmin.daftar-jalur.afirmasi.siswa_lulus', compact('affirmationTracks'));

        return $pdf->stream('data_afirmasi_lulus.pdf');
    }

    /**
     * Generate dan tampilkan PDF siswa afirmasi dengan status "Tidak Lulus".
     */
    public function downloadPdfTidakLulus()
    {
        $affirmationTracks = AffirmationTrack::with('user')
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Tidak Lulus');
            })
            ->get();

        $pdf = Pdf::loadView('back.superadmin.daftar-jalur.afirmasi.siswa_tidak_lulus', compact('affirmationTracks'));

        return $pdf->stream('data_afirmasi_tidak_lulus.pdf');
    }

    /**
     * Ekspor data siswa jalur afirmasi yang Lulus ke Excel.
     */
    public function downloadExcelAfirmasiLulus()
    {
        $affirmationTracks = AffirmationTrack::with(['user.biodata', 'user.sekolah'])
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Lulus');
            })
            ->get();

        return Excel::download(new AfirmasiStatusLulusExport($affirmationTracks), 'daftar_afirmasi_lulus_semua.xlsx');
    }

    /**
     * Ekspor data siswa jalur afirmasi yang Tidak Lulus ke Excel.
     */
    public function downloadExcelAfirmasiTidakLulus()
    {
        $affirmationTracks = AffirmationTrack::with(['user.biodata', 'user.sekolah'])
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Tidak Lulus');
            })
            ->get();

        return Excel::download(new AfirmasiStatusTidakLulusExport($affirmationTracks), 'daftar_afirmasi_tidak_lulus_semua.xlsx');
    }
}
