<?php

use App\Http\Controllers\Back\AdmissionTrackController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\FaqController;
use App\Http\Controllers\Back\SekolahController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\TimelineController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front/index');
});

Route::middleware(['auth', 'verified', 'role:super admin'])->prefix('/dashboard')->group(function () {
    Route::get('/index_super_admin', [DashboardController::class, 'superadmin'])->name('dashboard.index_super_admin');
    Route::get('/chart-data', [DashboardController::class, 'getChartData'])->name('chart-data.index');
    Route::resource('/sekolah', SekolahController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/faqs', FaqController::class);
    Route::resource('/sliders', SliderController::class);
    Route::resource('/timelines', TimelineController::class);
    Route::resource('/videos', VideoController::class);
    Route::get('/setting', [SettingController::class, 'edit'])->name('setting.edit');
    Route::put('/setting', [SettingController::class, 'update'])->name('setting.update');
    Route::resource('/jalur-pendaftaran', AdmissionTrackController::class);
});
Route::middleware(['auth', 'verified', 'role:siswa'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa afirmasi'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa domisili'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa prestasi'])->prefix('/dashboard')->group(function () {});

Route::middleware(['auth', 'verified', 'role.sekolah:admin afirmasi'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:admin domisili'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:admin prestasi'])->prefix('/dashboard')->group(function () {});
require __DIR__ . '/auth.php';
