<?php

use App\Http\Controllers\Back\AchievementController;
use App\Http\Controllers\Back\AdmissionTrackController;
use App\Http\Controllers\Back\AffirmationController;
use App\Http\Controllers\Back\BroadcastController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\DomicileController;
use App\Http\Controllers\Back\FaqController;
use App\Http\Controllers\Back\SekolahController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\StudentActionController;
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


    Route::prefix('prestasi')->name('prestasi.')->group(function () {
        Route::get('/', [AchievementController::class, 'index'])->name('index');
        Route::post('{id}/update-status', [AchievementController::class, 'updateStatusPrestasi'])->name('update_status');
        Route::get('{id}', [AchievementController::class, 'show'])->name('show');

        // Export PDF
        Route::get('lulus/pdf', [AchievementController::class, 'downloadPdfLulus'])->name('lulus_pdf');
        Route::get('tidak-lulus/pdf', [AchievementController::class, 'downloadPdfTidakLulus'])->name('tidak_lulus_pdf');

        // Export Excel
        Route::get('lulus/excel', [AchievementController::class, 'downloadExcelPrestasiLulus'])->name('lulus_excel');
        Route::get('tidak-lulus/excel', [AchievementController::class, 'downloadExcelPrestasiTidakLulus'])->name('tidak_lulus_excel');
    });
    Route::prefix('afirmasi')->name('afirmasi.')->group(function () {
        Route::get('/', [AffirmationController::class, 'index'])->name('index');
        Route::post('{id}/update-status', [AffirmationController::class, 'updateStatusAfirmasi'])->name('update_status');
        Route::get('{id}', [AffirmationController::class, 'show'])->name('show');

        // Export PDF
        Route::get('lulus/pdf', [AffirmationController::class, 'downloadPdfLulus'])->name('lulus_pdf');
        Route::get('tidak-lulus/pdf', [AffirmationController::class, 'downloadPdfTidakLulus'])->name('tidak_lulus_pdf');

        // Export Excel
        Route::get('lulus/excel', [AffirmationController::class, 'downloadExcelAfirmasiLulus'])->name('lulus_excel');
        Route::get('tidak-lulus/excel', [AffirmationController::class, 'downloadExcelAfirmasiTidakLulus'])->name('tidak_lulus_excel');
    });
    Route::prefix('domisili')->name('domisili.')->group(function () {
        Route::get('/', [DomicileController::class, 'index'])->name('index');
        Route::post('{id}/update-status', [DomicileController::class, 'updateStatusDomicile'])->name('update_status');
        Route::get('{id}', [DomicileController::class, 'show'])->name('show');

        // Export PDF
        Route::get('lulus/pdf', [DomicileController::class, 'downloadPdfLulus'])->name('lulus_pdf');
        Route::get('tidak-lulus/pdf', [DomicileController::class, 'downloadPdfTidakLulus'])->name('tidak_lulus_pdf');

        // Export Excel
        Route::get('lulus/excel', [DomicileController::class, 'downloadExcelDomicileLulus'])->name('lulus_excel');
        Route::get('tidak-lulus/excel', [DomicileController::class, 'downloadExcelDomicileTidakLulus'])->name('tidak_lulus_excel');
    });
});
Route::middleware(['auth', 'verified', 'role:siswa'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa afirmasi'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa domisili'])->prefix('/dashboard')->group(function () {});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa prestasi'])->prefix('/dashboard')->group(function () {});


Route::middleware(['auth', 'verified', 'role.sekolah:admin prestasi'])->prefix('/dashboard')->group(function () {
    Route::get('/index_admin_prestasi', [DashboardController::class, 'indexAdminPrestasi'])->name('dashboard.index_admin_prestasi');
    Route::prefix('admin/prestasi')->name('prestasi.')->group(function () {
        Route::post('{id}/update-status', [AchievementController::class, 'updateStatusPrestasi'])->name('update_status');
        Route::get('{id}', [AchievementController::class, 'show'])->name('show');

        // Export PDF
        Route::get('lulus/pdf', [AchievementController::class, 'downloadPdfLulus'])->name('lulus_pdf');
        Route::get('tidak-lulus/pdf', [AchievementController::class, 'downloadPdfTidakLulus'])->name('tidak_lulus_pdf');

        // Export Excel
        Route::get('lulus/excel', [AchievementController::class, 'downloadExcelPrestasiLulus'])->name('lulus_excel');
        Route::get('tidak-lulus/excel', [AchievementController::class, 'downloadExcelPrestasiTidakLulus'])->name('tidak_lulus_excel');
    });
});

Route::middleware(['auth', 'verified', 'role.sekolah:admin afirmasi'])->prefix('/dashboard')->group(function () {
    Route::get('/index_admin_afirmasi', [DashboardController::class, 'indexAdminAfirmasi'])->name('dashboard.index_admin_afirmasi');
    Route::prefix('admin/afirmasi')->name('afirmasi.')->group(function () {
        Route::post('{id}/update-status', [AffirmationController::class, 'updateStatusAfirmasi'])->name('update_status');
        Route::get('{id}', [AffirmationController::class, 'show'])->name('show');

        // Export PDF
        Route::get('lulus/pdf', [AffirmationController::class, 'downloadPdfLulus'])->name('lulus_pdf');
        Route::get('tidak-lulus/pdf', [AffirmationController::class, 'downloadPdfTidakLulus'])->name('tidak_lulus_pdf');

        // Export Excel
        Route::get('lulus/excel', [AffirmationController::class, 'downloadExcelAfirmasiLulus'])->name('lulus_excel');
        Route::get('tidak-lulus/excel', [AffirmationController::class, 'downloadExcelAfirmasiTidakLulus'])->name('tidak_lulus_excel');
    });
});
Route::middleware(['auth', 'verified', 'role.sekolah:admin domisili'])->prefix('/dashboard')->group(function () {
    Route::get('/index_admin_domisili', [DashboardController::class, 'indexAdminDomisili'])->name('dashboard.index_admin_domisili');
    Route::prefix('admin/domisili')->name('domisili.')->group(function () {
        Route::post('{id}/update-status', [DomicileController::class, 'updateStatusDomicile'])->name('update_status');
        Route::get('{id}', [DomicileController::class, 'show'])->name('show');

        // Export PDF
        Route::get('lulus/pdf', [DomicileController::class, 'downloadPdfLulus'])->name('lulus_pdf');
        Route::get('tidak-lulus/pdf', [DomicileController::class, 'downloadPdfTidakLulus'])->name('tidak_lulus_pdf');

        // Export Excel
        Route::get('lulus/excel', [DomicileController::class, 'downloadExcelDomicileLulus'])->name('lulus_excel');
        Route::get('tidak-lulus/excel', [DomicileController::class, 'downloadExcelDomicileTidakLulus'])->name('tidak_lulus_excel');
    });
    Route::prefix('broadcast')->name('broadcast.')->middleware(['auth'])->group(function () {
        Route::get('{jalur}/{status}', [BroadcastController::class, 'index'])->name('{jalur}.{status}');
        Route::post('{jalur}/{status}/kirim', [BroadcastController::class, 'kirimPesan'])->name('{jalur}.{status}.kirim');
    });
});
Route::middleware(['auth', 'verified', 'role.sekolah:admin prestasi,admin afirmasi,admin domisili'])
    ->prefix('/dashboard')
    ->group(function () {
        Route::prefix('broadcast')
            ->name('broadcast.')
            ->group(function () {
                Route::get('{jalur}/{status}', [BroadcastController::class, 'index'])->name('{jalur}.{status}');
                Route::post('{jalur}/{status}/kirim', [BroadcastController::class, 'kirimPesan'])->name('{jalur}.{status}.kirim');
            });

        Route::get('/siswa', [StudentActionController::class, 'index'])->name('siswa.index');
        Route::delete('/siswa/bulk-delete', [StudentActionController::class, 'bulkDelete'])->name('siswa.bulkDelete');
        Route::get('/siswa/reset-password/{id}', [StudentActionController::class, 'resetPasswordSiswa'])->name('siswa.resetPassword');
        Route::get('/statistik-data', [DashboardController::class, 'indexAdmin'])->name('statistik-data.index');
        Route::get('/admin-chart-data', [DashboardController::class, 'getChartDataAdmin'])->name('admin-chart-data.index');
    });



require __DIR__ . '/auth.php';
