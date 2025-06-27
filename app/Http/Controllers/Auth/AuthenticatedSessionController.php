<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Tampilkan halaman login.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Tangani permintaan login dari user.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('login.password'),
        ];

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors([
                'email' => trans('auth.failed'),
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        $user = auth()->user();
        $sekolah = $user->sekolah->nama_sekolah ?? '';

        // Role: Super Admin
        if ($user->hasRole('super admin')) {
            return redirect()->intended(route('dashboard.index_super_admin', absolute: false));
        }

        // Pemeriksa
        if ($user->hasRole("pemeriksa domisili $sekolah")) {
            return redirect()->intended(route('dashboard.index_pemeriksa_domisili', absolute: false));
        }

        if ($user->hasRole("pemeriksa prestasi $sekolah")) {
            return redirect()->intended(route('dashboard.index_pemeriksa_prestasi', absolute: false));
        }

        if ($user->hasRole("pemeriksa afirmasi $sekolah")) {
            return redirect()->intended(route('dashboard.index_pemeriksa_afirmasi', absolute: false));
        }

        // Admin
        if ($user->hasRole("admin domisili $sekolah")) {
            return redirect()->intended(route('dashboard.index_admin_domisili', absolute: false));
        }

        if ($user->hasRole("admin prestasi $sekolah")) {
            return redirect()->intended(route('dashboard.index_admin_prestasi', absolute: false));
        }

        if ($user->hasRole("admin afirmasi $sekolah")) {
            return redirect()->intended(route('dashboard.index_admin_afirmasi', absolute: false));
        }

        // Siswa
        if ($user->hasRole('siswa')) {
            return redirect()->intended(route('dashboard.index_siswa', absolute: false));
        }

        // Jika tidak cocok role apa pun, kembali ke login
        return redirect()->intended(route('/login', absolute: false));
    }

    /**
     * Logout dan akhiri session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
