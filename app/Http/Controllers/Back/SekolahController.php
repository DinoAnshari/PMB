<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;
use Exception;

class SekolahController extends Controller
{
    /**
     * Menampilkan daftar sekolah.
     */
    public function index()
    {
        $schools = School::all();
        return view('back.superadmin.sekolah.index', compact('schools'));
    }

    /**
     * Menyimpan sekolah baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah'   => 'required|string|max:255',
            'alamat_sekolah' => 'required|string|max:255',
            'latitude'       => 'nullable|numeric',
            'longitude'      => 'nullable|numeric',
        ]);

        School::create([
            'nama_sekolah'   => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'latitude'       => $request->latitude,
            'longitude'      => $request->longitude,
        ]);

        return redirect()->route('sekolah.index')->with([
            'success' => 'Sekolah berhasil ditambahkan',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Menampilkan detail sekolah berdasarkan ID.
     */
    public function show($id)
    {
        try {
            $school = School::findOrFail($id);
            return response()->json(['data' => $school]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Sekolah tidak ditemukan!'], 404);
        }
    }

    /**
     * Memperbarui data sekolah.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_sekolah'   => 'required|string|max:255',
            'alamat_sekolah' => 'required|string|max:255',
            'latitude'       => 'nullable|numeric',
            'longitude'      => 'nullable|numeric',
        ]);

        $school = School::findOrFail($id);
        $school->update([
            'nama_sekolah'   => $request->nama_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'latitude'       => $request->latitude,
            'longitude'      => $request->longitude,
        ]);

        return redirect()->route('sekolah.index')->with([
            'success' => 'Sekolah berhasil diperbarui',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Menghapus sekolah dari database.
     */
    public function destroy($id)
    {
        $school = School::findOrFail($id);
        $school->delete();

        return redirect()->route('sekolah.index')->with([
            'success' => 'Sekolah berhasil dihapus',
            'type'    => 'bootstrap-toast',
        ]);
    }
}
