<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolePerSekolah
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = auth()->user();
        $sekolah = $user->sekolah->nama_sekolah ?? '';

        // Izinkan super admin
        if ($user->hasRole('super admin')) {
            return $next($request);
        }

        // Cek apakah user punya salah satu role yang dikombinasikan dengan nama sekolah
        foreach ($roles as $role) {
            $roleFull = "{$role} {$sekolah}";
            if ($user->hasRole($roleFull)) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized');
    }
}
