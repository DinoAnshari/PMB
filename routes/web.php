<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front/index');
});

// Route dashboard khusus untuk role superadmin
// Menampilkan halaman dashboard statis dari folder views/back/superadmin/
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
    Route::get('/jalur-prestasi/prestasi-lulus-pdf', function () {
        return view('back.superadmin.daftar-jalur.prestasi.siswa_lulus');
    })->name('prestasi-lulus-pdf.index');
    Route::get('/jalur-prestasi/prestasi-tidak-lulus-pdf', function () {
        return view('back.superadmin.daftar-jalur.prestasi.siswa_tidak_lulus');
    })->name('prestasi-tidak-lulus-pdf.index');
    Route::get('/jalur-afirmasi', function () {
        return view('back.superadmin.daftar-jalur.afirmasi.index');
    })->name('jalur-afirmasi.index');
    Route::get('/jalur-afirmasi/show', function () {
        return view('back.superadmin.daftar-jalur.Afirmasi.show');
    })->name('jalur-Afirmasi.show');
    Route::get('/jalur-afirmasi/afirmasi-lulus-pdf', function () {
        return view('back.superadmin.daftar-jalur.afirmasi.siswa_lulus');
    })->name('afirmasi-lulus-pdf.index');
    Route::get('/jalur-afirmasi/afirmasi-tidak-lulus-pdf', function () {
        return view('back.superadmin.daftar-jalur.afirmasi.siswa_tidak_lulus');
    })->name('afirmasi-tidak-lulus-pdf.index');
    Route::get('/jalur-domisili', function () {
        return view('back.superadmin.daftar-jalur.domisili.index');
    })->name('jalur-domisili.index');
    Route::get('/jalur-domisili/show', function () {
        return view('back.superadmin.daftar-jalur.domisili.show');
    })->name('jalur-domisili.show');
    Route::get('/jalur-domisili/domisili-lulus-pdf', function () {
        return view('back.superadmin.daftar-jalur.domisili.siswa_lulus');
    })->name('domisili-lulus-pdf.index');
    Route::get('/jalur-domisili/domisili-tidak-lulus-pdf', function () {
        return view('back.superadmin.daftar-jalur.domisili.siswa_tidak_lulus');
    })->name('domisili-tidak-lulus-pdf.index');
    Route::get('/broadcast/afirmasi/lulus', function () {
        return view('back.superadmin.broadcast.lulus.afirmasi.index');
    })->name('broadcast.afirmasi.lulus.index');
    Route::get('/broadcast/domisili/lulus', function () {
        return view('back.superadmin.broadcast.lulus.domisili.index');
    })->name('broadcast.domisili.lulus.index');
    Route::get('/broadcast/prestasi/lulus', function () {
        return view('back.superadmin.broadcast.lulus.prestasi.index');
    })->name('broadcast.prestasi.lulus.index');
    Route::get('/broadcast/afirmasi/tidak-lulus', function () {
        return view('back.superadmin.broadcast.tidak-lulus.afirmasi.index');
    })->name('broadcast.afirmasi.tidak-lulus.index');
    Route::get('/broadcast/domisili/tidak-lulus', function () {
        return view('back.superadmin.broadcast.tidak-lulus.domisili.index');
    })->name('broadcast.domisili.tidak-lulus.index');
    Route::get('/broadcast/prestasi/tidak-lulus', function () {
        return view('back.superadmin.broadcast.tidak-lulus.prestasi.index');
    })->name('broadcast.prestasi.tidak-lulus.index');

    // Route dashboard khusus untuk role admin  
    // Menampilkan halaman dashboard statis dari folder views/back/admin/
    Route::get('/statistik', function () {
        return view('back.admin.statistik.index');
    })->name('statistik.index');

    // Route dashboard khusus untuk role pemeriksa  
    // Menampilkan halaman dashboard statis dari folder views/back/admin/
    Route::get('/pemeriksa-afirmasi', function () {
        return view('back.pemeriksa.afirmasi.index');
    })->name('pemeriksa-afirmasi.index');
    Route::get('/pemeriksa-afirmasi/show', function () {
        return view('back.pemeriksa.afirmasi.show');
    })->name('pemeriksa-afirmasi.show');

    Route::get('/pemeriksa-domisili', function () {
        return view('back.pemeriksa.domisili.index');
    })->name('pemeriksa-domisili.index');
    Route::get('/pemeriksa-domisili/show', function () {
        return view('back.pemeriksa.domisili.show');
    })->name('pemeriksa-domisili.show');

    Route::get('/pemeriksa-prestasi', function () {
        return view('back.pemeriksa.prestasi.index');
    })->name('pemeriksa-prestasi.index');

    Route::get('/pemeriksa-prestasi/show', function () {
        return view('back.pemeriksa.prestasi.show');
    })->name('pemeriksa-prestasi.show');

     // Route dashboard khusus untuk role pemeriksa  
    // Menampilkan halaman dashboard statis dari folder views/back/admin/
    Route::get('/index_siswa', function () {
        return view('back.siswa.index');
    })->name('dashboard.index_siswa');
    Route::get('/biodata', function () {
        return view('back.siswa.biodata.index');
    })->name('biodata.index');
});


require __DIR__ . '/auth.php';
