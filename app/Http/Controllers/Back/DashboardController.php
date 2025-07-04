<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\AchievementTrack;
use App\Models\AffirmationTrack;
use App\Models\DomicileTrack;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function superadmin()
    {
        $jumlahPrestasi = AchievementTrack::count();
        $jumlahAfirmasi = AffirmationTrack::count();
        $jumlahDomisili = DomicileTrack::count();

        $waktuSekarang   = now('Asia/Jakarta')->format('H:i:s');
        $tanggalSekarang = now('Asia/Jakarta')->locale('id')->isoFormat('dddd, D MMMM Y');

        $terbaruPrestasi = AchievementTrack::with(['user.biodata', 'user.sekolah'])
            ->latest()
            ->first();

        $terbaruAfirmasi = AffirmationTrack::with(['user.biodata', 'user.sekolah'])
            ->latest()
            ->first();

        $terbaruDomisili = DomicileTrack::with(['user.biodata', 'user.sekolah'])
            ->latest()
            ->first();
        return view('back.superadmin.index', compact(
            'jumlahPrestasi',
            'jumlahAfirmasi',
            'jumlahDomisili',
            'waktuSekarang',
            'tanggalSekarang',
            'terbaruPrestasi',
            'terbaruAfirmasi',
            'terbaruDomisili',
        ));
    }
    public function getChartData()
    {
        $jumlahAfirmasi = AffirmationTrack::count();
        $jumlahPrestasi = AchievementTrack::count();
        $jumlahDomisili = DomicileTrack::count();

        $labels = ['Afirmasi', 'Prestasi', 'Domisili'];
        $series = [
            $jumlahAfirmasi,
            $jumlahPrestasi,
            $jumlahDomisili
        ];

        return response()->json([
            'labels' => $labels,
            'series' => $series,
        ]);
    }
    // Menampilkan data siswa jalur Prestasi berdasarkan sekolah user yang login
    public function indexAdminPrestasi()
    {
        $user = auth()->user();

        $achievementTracks = AchievementTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })
            ->with(['user.sekolah']) // Eager loading relasi sekolah untuk menghindari N+1 query
            ->orderByDesc('rata_rata_keseluruhan') // Urutkan berdasarkan nilai tertinggi
            ->whereHas('statusBerkas', function ($query) {
                $query->where('status', 'Lulus Berkas');
            })
            ->get();

        return view('back.superadmin.daftar-jalur.prestasi.index', compact('achievementTracks'));
    }

    // Menampilkan data siswa jalur Afirmasi berdasarkan sekolah user yang login
    public function indexAdminAfirmasi()
    {
        $user = auth()->user();

        $affirmationTracks = AffirmationTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })
            ->with(['user.sekolah']) // Eager loading relasi sekolah
            ->orderByDesc('created_at') // Urutkan berdasarkan data terbaru
            ->whereHas('statusBerkas', function ($query) {
                $query->where('status', 'Lulus Berkas');
            })
            ->get();

        return view('back.superadmin.afirmasi.index', compact('affirmationTracks'));
    }

    // Menampilkan data siswa jalur Domisili berdasarkan sekolah user yang login
    public function indexAdminDomisili()
    {
        $user = auth()->user();

        $domicileTracks = DomicileTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })
            ->with(['user.sekolah']) // Eager loading relasi sekolah
            ->orderByDesc('jarak_km') // Urutkan berdasarkan jarak terdekat ke sekolah
            ->whereHas('statusBerkas', function ($query) {
                $query->where('status', 'Lulus Berkas');
            })
            ->get();

        return view('back.admin.domisili.index', compact('domicileTracks'));
    }

    // Menyediakan data untuk grafik chart (JSON) di dashboard admin
    public function getChartDataAdmin()
    {
        $user = auth()->user();

        // Hitung total siswa dari masing-masing jalur berdasarkan sekolah user
        $totalAffirmationTracks = AffirmationTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })->count();

        $totalAchievementTracks = AchievementTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })->count();

        $totalDomicileTracks = DomicileTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })->count();

        // Label dan data untuk chart
        $labels = ['Afirmasi', 'Prestasi', 'Domisili'];
        $series = [
            $totalAffirmationTracks,
            $totalAchievementTracks,
            $totalDomicileTracks
        ];

        return response()->json([
            'labels' => $labels,
            'series' => $series,
        ]);
    }

    // Menampilkan ringkasan data jumlah siswa per jalur di dashboard admin
    public function indexAdmin()
    {
        $user = auth()->user();

        $totalAchievementTracks = AchievementTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })->count();

        $totalAffirmationTracks = AffirmationTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })->count();

        $totalDomicileTracks = DomicileTrack::whereHas('user', function ($query) use ($user) {
            $query->where('sekolah_id', $user->sekolah_id);
        })->count();

        return view('back.admin.statistik.index', compact(
            'totalAchievementTracks',
            'totalAffirmationTracks',
            'totalDomicileTracks'
        ));
    }
}
