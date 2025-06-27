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
}
