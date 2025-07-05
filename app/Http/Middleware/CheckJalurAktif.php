<?php

namespace App\Http\Middleware;

use App\Models\AdmissionTrack;
use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckJalurAktif
{
    public function handle(Request $request, Closure $next): mixed
    {
        $segment = $request->segment(2);
        $today = Carbon::now()->format('Y-m-d');

        $jalurData = AdmissionTrack::where('nama', $segment)->first();

        if (!$jalurData) {
            abort(404, 'Jalur pendaftaran tidak ditemukan.');
        }

        if (
            $today < $jalurData->tanggal_mulai || $today > $jalurData->tanggal_selesai
        ) {
            abort(403, 'Akses ke jalur ini belum dibuka.');
        }

        return $next($request);
    }
}
