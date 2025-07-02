<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\DomicileTrack;
use App\Exports\DomisiliStatusLulusExport;
use App\Exports\DomisiliStatusTidakLulusExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;

class DomicileController extends Controller
{
    /**
     * Menampilkan daftar siswa jalur domisili yang lolos verifikasi berkas,
     * diurutkan berdasarkan nilai rata-rata keseluruhan secara menurun.
     */
    public function index()
    {
        $domicileTracks = DomicileTrack::with('user')
            ->whereHas('statusBerkas', function ($query) {
                $query->where('status', 'Lulus Berkas');
            })
            ->orderByDesc('rata_rata_keseluruhan')
            ->get();

        return view('back.superadmin.daftar-jalur.domisili.index', compact('domicileTracks'));
    }

    /**
     * Memperbarui status pendaftaran siswa pada jalur domisili.
     */
    public function updateStatusDomicile(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $domicileTrack = DomicileTrack::findOrFail($id);

        $domicileTrack->statusPendaftaran()->updateOrCreate(
            [
                'pendaftaran_id' => $id,
                'pendaftaran_type' => DomicileTrack::class,
            ],
            [
                'jalur' => 'Domisili',
                'status' => $request->input('status'),
            ]
        );

        return redirect()->back()->with([
            'success' => 'Status pendaftaran Jalur Domisili berhasil diperbarui!',
            'type' => 'bootstrap-toast',
        ]);
    }

    /**
     * Menampilkan detail siswa jalur domisili, termasuk user, orang tua, dan wali.
     */
    public function show($id)
    {
        $domicileTrack = DomicileTrack::with([
            'user',
            'student.parent',
            'student.guardian',
        ])->findOrFail($id);

        return view('back.superadmin.daftar-jalur.domisili.show', compact('domicileTrack'));
    }

    /**
     * Generate dan tampilkan PDF siswa domisili dengan status "Lulus".
     */
    public function downloadPdfLulus()
    {
        $domicileTracks = DomicileTrack::with('user')
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Lulus');
            })
            ->get();

        $pdf = Pdf::loadView('back.superadmin.daftar-jalur.domisili.siswa_lulus', compact('domicileTracks'));

        return $pdf->stream('data_domisili_lulus.pdf');
    }

    /**
     * Generate dan tampilkan PDF siswa domisili dengan status "Tidak Lulus".
     */
    public function downloadPdfTidakLulus()
    {
        $domicileTracks = DomicileTrack::with('user')
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Tidak Lulus');
            })
            ->get();

        $pdf = Pdf::loadView('back.superadmin.daftar-jalur.domisili.siswa_tidak_lulus', compact('domicileTracks'));

        return $pdf->stream('data_domisili_tidak_lulus.pdf');
    }

    /**
     * Ekspor data siswa jalur domisili yang Lulus ke Excel.
     */
    public function downloadExcelDomicileLulus()
    {
        $domicileTracks = DomicileTrack::with(['user.biodata', 'user.sekolah'])
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Lulus');
            })
            ->get();

        return Excel::download(new DomisiliStatusLulusExport($domicileTracks), 'daftar_domisili_lulus_semua.xlsx');
    }

    /**
     * Ekspor data siswa jalur domisili yang Tidak Lulus ke Excel.
     */
    public function downloadExcelDomicileTidakLulus()
    {
        $domicileTracks = DomicileTrack::with(['user.biodata', 'user.sekolah'])
            ->whereHas('statusPendaftaran', function ($query) {
                $query->where('status', 'Tidak Lulus');
            })
            ->get();

        return Excel::download(new DomisiliStatusTidakLulusExport($domicileTracks), 'daftar_domisili_tidak_lulus_semua.xlsx');
    }
}
