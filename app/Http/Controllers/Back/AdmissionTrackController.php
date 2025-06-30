<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\AdmissionTrack;
use Illuminate\Http\Request;
use Exception;

class AdmissionTrackController extends Controller
{
    /**
     * Menampilkan daftar semua jalur pendaftaran.
     */
    public function index()
    {
        $jalurLists = AdmissionTrack::all();
        return view('back.superadmin.jalur.index', compact('jalurLists'));
    }

    /**
     * Menyimpan data jalur pendaftaran baru.
     */
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'nama'            => 'required|string|unique:admission_tracks,nama',
            'tanggal_mulai'   => 'nullable|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
        ]);

        // Simpan ke database
        AdmissionTrack::create($request->all());

        return redirect()->route('jalur-pendaftaran.index')->with([
            'success' => 'Jalur pendaftaran berhasil ditambahkan',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Menampilkan detail data jalur (digunakan untuk modal edit, dll).
     */
    public function show($id)
    {
        try {
            $jalur = AdmissionTrack::findOrFail($id);
            return response()->json(['data' => $jalur]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Jalur Pendaftaran tidak ditemukan!'], 404);
        }
    }

    /**
     * Memperbarui data jalur pendaftaran.
     */
    public function update(Request $request, $id)
    {
        try {
            $jalur = AdmissionTrack::findOrFail($id);

            // Cek apakah nama baru sudah digunakan oleh jalur lain
            $existingJalur = AdmissionTrack::where('nama', $request->nama)
                ->where('id', '!=', $jalur->id)
                ->first();

            if ($existingJalur) {
                return redirect()->route('jalur-pendaftaran.index')->with([
                    'error' => 'Nama jalur sudah digunakan. Silakan pilih nama lain.',
                    'type'  => 'bootstrap-toast',
                ]);
            }

            // Validasi input
            $request->validate([
                'nama'            => 'required|string',
                'tanggal_mulai'   => 'nullable|date',
                'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            ]);

            // Update data
            $jalur->update($request->all());

            return redirect()->route('jalur-pendaftaran.index')->with([
                'success' => 'Jalur pendaftaran berhasil diperbarui',
                'type'    => 'bootstrap-toast',
            ]);
        } catch (Exception $e) {
            return redirect()->route('jalur-pendaftaran.index')->with([
                'error' => 'Terjadi kesalahan saat memperbarui jalur pendaftaran: ' . $e->getMessage(),
                'type'  => 'bootstrap-toast',
            ]);
        }
    }

    /**
     * Menghapus data jalur pendaftaran.
     */
    public function destroy($id)
    {
        try {
            $jalur = AdmissionTrack::findOrFail($id);
            $jalur->delete();

            return redirect()->route('jalur-pendaftaran.index')->with([
                'success' => 'Jalur pendaftaran berhasil dihapus',
                'type'    => 'bootstrap-toast',
            ]);
        } catch (Exception $e) {
            return redirect()->route('jalur-pendaftaran.index')->with([
                'error' => 'Data tidak ditemukan!',
                'type'  => 'bootstrap-toast',
            ]);
        }
    }
}
