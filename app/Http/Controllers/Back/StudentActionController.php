<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

class StudentActionController extends Controller
{
    /**
     * Menampilkan daftar siswa.
     * Jika user super admin → tampilkan semua siswa.
     * Jika bukan → tampilkan siswa berdasarkan sekolah yang dimiliki user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $currentUser = auth()->user();

        $siswa = $currentUser->hasRole('super admin')
            ? User::role('siswa')->with('sekolah')->get()
            : User::role('siswa')
                ->where('sekolah_id', $currentUser->sekolah_id)
                ->with('sekolah')
                ->get();

        return view('back.superadmin.resets.index', compact('siswa'));
    }

    /**
     * Reset password siswa ke nilai default "reset123".
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPasswordSiswa($id)
    {
        try {
            $user = User::findOrFail($id);

            // Pastikan user adalah siswa
            if (!$user->hasRole('siswa')) {
                return redirect()->back()->with([
                    'error' => 'User ini bukan siswa.',
                    'type' => 'bootstrap-toast'
                ]);
            }

            // Lakukan reset password
            $user->update([
                'password' => Hash::make('reset123'),
            ]);

            return redirect()->back()->with([
                'success' => 'Password berhasil direset menjadi reset123.',
                'type' => 'bootstrap-toast'
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'error' => 'Terjadi kesalahan saat reset password.',
                'type' => 'bootstrap-toast'
            ]);
        }
    }

    /**
     * Menghapus data siswa secara massal berdasarkan ID yang dikirim dari form.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        // Validasi bahwa ada data yang dipilih
        if (!$ids) {
            return redirect()->back()->with([
                'error' => 'Tidak ada data yang dipilih.',
                'type' => 'bootstrap-toast'
            ]);
        }

        try {
            User::whereIn('id', $ids)->delete();

            return redirect()->back()->with([
                'success' => 'Data siswa berhasil dihapus.',
                'type' => 'bootstrap-toast'
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with([
                'error' => 'Terjadi kesalahan saat menghapus data.',
                'type' => 'bootstrap-toast'
            ]);
        }
    }
}
