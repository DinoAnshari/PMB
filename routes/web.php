<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front/index');
});

// Route dashboard khusus untuk role superadmin
// Menampilkan halaman dashboard statis dari folder views/back/superadmin/index.blade.php
Route::prefix('dashboard')->group(function () {
    Route::get('/index_super_admin', function () {
        return view('back.superadmin.index');
    })->name('dashboard.index_super_admin');
    Route::get('/sekolah', function () {
        return view('back.superadmin.sekolah.index');
    })->name('sekolah.index');
    Route::get('/users', function () {
        return view('back.superadmin.user.index');
    })->name('user.index');
    Route::get('/faqs', function () {
        return view('back.superadmin.faqs.index');
    })->name('faqs.index');
    Route::get('/timelines', function () {
        return view('back.superadmin.timelines.index');
    })->name('timelines.index');
    Route::get('/sliders', function () {
        return view('back.superadmin.sliders.index');
    })->name('sliders.index');
    Route::get('/videos', function () {
        return view('back.superadmin.videos.index');
    })->name('videos.index');
    Route::get('/settings', function () {
        return view('back.superadmin.settings.index');
    })->name('settings.index');
    Route::get('/jalur', function () {
        return view('back.superadmin.jalur.index');
    })->name('jalur.index');
    Route::get('/resets', function () {
        return view('back.superadmin.resets.index');
    })->name('resets.index');
    Route::get('/jalur-prestasi', function () {
        return view('back.superadmin.daftar-jalur.prestasi.index');
    })->name('jalur-prestasi.index');
    Route::get('/jalur-prestasi/show', function () {
        return view('back.superadmin.daftar-jalur.prestasi.show');
    })->name('jalur-prestasi.show');

});


require __DIR__ . '/auth.php';
