<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolePerSekolah
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = auth()->user();
        $sekolah = $user->sekolah->nama_sekolah ?? '';

        $roleFull = "$role $sekolah";

        if (!$user->hasRole($roleFull) && !$user->hasRole('super admin')) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
