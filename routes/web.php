<?php

use App\Http\Controllers\Back\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front/index');
});

Route::middleware(['auth', 'verified', 'role:super admin'])->prefix('/dashboard')->group(function () {
    Route::get('/index_super_admin', [DashboardController::class, 'superadmin'])->name('dashboard.index_super_admin');
    Route::get('/chart-data', [DashboardController::class, 'getChartData'])->name('chart-data.index');
});
Route::middleware(['auth', 'verified', 'role:siswa'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa afirmasi'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa domisili'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa prestasi'])->prefix('/dashboard')->group(function () {});

Route::middleware(['auth', 'verified', 'role.sekolah:admin afirmasi'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:admin domisili'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:admin prestasi'])->prefix('/dashboard')->group(function () {});
require __DIR__ . '/auth.php';
