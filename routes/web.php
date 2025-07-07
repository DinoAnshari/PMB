<?php

use App\Http\Controllers\Back\AchievementController;
use App\Http\Controllers\Back\AdmissionTrackController;
use App\Http\Controllers\Back\AffirmationController;
use App\Http\Controllers\Back\BroadcastController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\DomicileController;
use App\Http\Controllers\Back\FaqController;
use App\Http\Controllers\Back\PemeriksaController;
use App\Http\Controllers\Back\SekolahController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\Siswa\BiodataController;
use App\Http\Controllers\Back\Siswa\DashboardSiswaController;
use App\Http\Controllers\Back\Siswa\JalurAfirmasiController;
use App\Http\Controllers\Back\Siswa\JalurPrestasiController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\StudentActionController;
use App\Http\Controllers\Back\TimelineController;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\VideoController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa prestasi,pemeriksa afirmasi,pemeriksa domisili'])
    ->prefix('/dashboard')
    ->group(function () {

        // Jalur Prestasi
        Route::get('/index_pemeriksa_prestasi', [PemeriksaController::class, 'indexPrestasi'])->name('dashboard.index_pemeriksa_prestasi');
        Route::prefix('prestasi')->name('prestasi.')->group(function () {
            Route::get('/{id}', [PemeriksaController::class, 'showPrestasi'])->name('show-pemeriksa');
            Route::post('/{id}/update', [PemeriksaController::class, 'updatePrestasi'])->name('update-berkas');
        });

        // Jalur Afirmasi
        Route::get('/index_pemeriksa_afirmasi', [PemeriksaController::class, 'indexAfirmasi'])->name('dashboard.index_pemeriksa_afirmasi');
        Route::prefix('afirmasi')->name('afirmasi.')->group(function () {
            Route::get('/{id}', [PemeriksaController::class, 'showAfirmasi'])->name('show-pemeriksa');
            Route::post('/{id}/update', [PemeriksaController::class, 'updateAfirmasi'])->name('update-berkas');
        });

        // Jalur Domisili
        Route::get('/index_pemeriksa_domisili', [PemeriksaController::class, 'indexDomisili'])->name('dashboard.index_pemeriksa_domisili');
        Route::prefix('domisili')->name('domisili.')->group(function () {
            Route::get('/{id}', [PemeriksaController::class, 'showDomisili'])->name('show-pemeriksa');
            Route::post('/{id}/update', [PemeriksaController::class, 'updateDomisili'])->name('update-berkas');
        });
    });
Route::middleware(['auth', 'verified', 'role:siswa'])->prefix('/dashboard')->group(function () {
    Route::get('/index_siswa', [DashboardSiswaController::class, 'index'])->name('dashboard.index_siswa');
    Route::resource('/biodata', BiodataController::class);
    Route::get('/prestasi', [JalurPrestasiController::class, 'index'])->name('prestasi-siswa.index')->middleware('jalur.aktif');
    Route::get('/prestasi-siswa/create', [JalurPrestasiController::class, 'create'])->name('prestasi-siswa.create');
    Route::post('/prestasi-siswa/store', [JalurPrestasiController::class, 'store'])->name('prestasi-siswa.store');
    Route::get('/prestasi-siswa/{id}/edit', [JalurPrestasiController::class, 'edit'])->name('prestasi-siswa.edit');
    Route::put('/prestasi-siswa/{id}', [JalurPrestasiController::class, 'update'])->name('prestasi-siswa.update');
    
    Route::get('/afirmasi', [JalurAfirmasiController::class, 'index'])->name('afirmasi-siswa.index')->middleware('jalur.aktif');
    Route::get('/afirmasi-siswa/create', [JalurAfirmasiController::class, 'create'])->name('afirmasi-siswa.create');
    Route::post('/afirmasi-siswa/store', [JalurAfirmasiController::class, 'store'])->name('afirmasi-siswa.store');
    Route::get('/afirmasi-siswa/{id}/edit', [JalurAfirmasiController::class, 'edit'])->name('afirmasi-siswa.edit');
    Route::put('/afirmasi-siswa/{id}', [JalurAfirmasiController::class, 'update'])->name('afirmasi-siswa.update');
});
Route::middleware(['auth', 'verified'])->prefix('/dashboard')->group(function () {
    Route::get('/jalur-prestasi/{id}/cetak-kartu', [JalurPrestasiController::class, 'cetakKartu'])->name('jalur-prestasi.cetak-kartu');
    Route::get('/jalur-afirmasi/{id}/cetak-kartu', [JalurAfirmasiController::class, 'cetakKartu'])->name('jalur-afirmasi.cetak-kartu');
});
Route::get('/check-biodata', function () {
    $user = Auth::user();
    return response()->json([
        'hasBiodata' => $user->biodata()->exists(),
        'hasPrestasi' => $user->prestasi()->exists(),
        'hasAfirmasi' => $user->afirmasi()->exists(),
        'hasDomisili' => $user->domisili()->exists(),
        'hasAnyJalur' => $user->prestasi()->exists() ||
            $user->afirmasi()->exists() ||
            $user->domisili()->exists(),
    ]);
})->middleware('auth');
require __DIR__ . '/auth.php';
