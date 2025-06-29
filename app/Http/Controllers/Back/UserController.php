<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Exception;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
                $query->where('name', '!=', 'siswa');
            })
            ->with('roles', 'sekolah')
            ->get();

        $schools = School::all();
        $roles = [
            'admin prestasi',
            'admin afirmasi',
            'admin domisili',
            'pemeriksa prestasi',
            'pemeriksa afirmasi',
            'pemeriksa domisili',
        ];

        return view('back.superadmin.user.index', compact('users', 'schools', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:users,email',
            'password'    => 'required|string|min:8|confirmed',
            'role'        => 'required|string',
            'sekolah_id'  => 'required|exists:schools,id',
        ]);

        $sekolah = School::findOrFail($request->sekolah_id);

        $user = User::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'password'    => Hash::make($request->password),
            'sekolah_id'  => $request->sekolah_id,
        ]);

        $roleFull = $request->role . ' ' . $sekolah->nama_sekolah;

        $role = Role::firstOrCreate(['name' => $roleFull]);
        $user->assignRole($roleFull);

        return redirect()->route('users.index')->with([
            'success' => 'User berhasil ditambahkan',
            'type'    => 'bootstrap-toast',
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name'        => 'required|string|max:255',
                'email'       => 'required|email|unique:users,email,' . $id,
                'password'    => 'nullable|string|min:8|confirmed',
                'role'        => 'required|string',
                'sekolah_id'  => 'required|exists:schools,id',
            ]);

            $user = User::findOrFail($id);
            $sekolah = School::findOrFail($request->sekolah_id);

            $user->update([
                'name'        => $request->name,
                'email'       => $request->email,
                'password'    => $request->password ? Hash::make($request->password) : $user->password,
                'sekolah_id'  => $request->sekolah_id,
            ]);

            $roleFull = $request->role . ' ' . $sekolah->nama_sekolah;

            $role = Role::firstOrCreate(['name' => $roleFull]);
            $user->syncRoles([$roleFull]);

            return redirect()->route('users.index')->with([
                'success' => 'User berhasil diperbarui',
                'type'    => 'bootstrap-toast',
            ]);
        } catch (Exception $e) {
            return redirect()->back()->withInput()->with([
                'error' => 'Terjadi kesalahan saat memperbarui user: ' . $e->getMessage(),
                'type'  => 'bootstrap-toast',
            ]);
        }
    }

    public function show($id)
    {
        try {
            $user = User::with('roles', 'sekolah')->findOrFail($id);
            $schools = School::all();

            return response()->json([
                'data'    => $user,
                'schools' => $schools,
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => 'User tidak ditemukan!'], 404);
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with([
            'success' => 'User berhasil dihapus',
            'type'    => 'bootstrap-toast',
        ]);
    }
}
