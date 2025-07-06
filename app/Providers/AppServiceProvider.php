<?php

namespace App\Providers;

use App\Models\AdmissionTrack;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $setting = Setting::first();
        $today = Carbon::now()->format('Y-m-d');
        $jalurList = AdmissionTrack::all()->filter(function ($jalur) use ($today) {
            return !$jalur->tanggal_mulai ||
                ($today >= $jalur->tanggal_mulai && $today <= $jalur->tanggal_selesai);
        });
        // Share ke semua view
        View::share([
            'setting' => $setting,
            'jalurList' => $jalurList,
        ]);
    }
}
