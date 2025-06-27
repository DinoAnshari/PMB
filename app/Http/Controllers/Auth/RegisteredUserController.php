<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\School;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Tampilkan halaman registrasi.
     */
    public function create(): View
    {
        $school = School::all(); // Ambil semua data sekolah
        return view('auth.register', compact('school'));
    }

    /**
     * Tangani permintaan registrasi pengguna baru.
     */
    public function store(Request $request): RedirectResponse
    {
        // Logging awal request
        Log::info('Store method called', [
            'request' => $request->all(),
        ]);

        // Validasi input user
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'login.password' => ['required', Rules\Password::defaults()],
            'sekolah_id' => ['required', 'exists:schools,id'],
        ]);

        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->input('login.password')),
            'sekolah_id' => $request->sekolah_id,
        ]);

        // Berikan role default sebagai 'siswa'
        $user->assignRole('siswa');

        // Trigger event terdaftar
        event(new Registered($user));

        // Login otomatis
        Auth::login($user);

        // Redirect ke dashboard siswa
        return redirect(route('dashboard.index_siswa', absolute: false));
    }
}
