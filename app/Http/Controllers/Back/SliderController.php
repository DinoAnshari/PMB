<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Menampilkan semua data slider.
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('back.superadmin.sliders.index', compact('sliders'));
    }

    /**
     * Menyimpan data slider baru ke dalam database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gambar'     => 'required|image|max:2048',
            'judul'      => 'nullable|string|max:255',
            'subtitle'   => 'nullable|string|max:255',
            'deskripsi'  => 'nullable|string',
            'nomor'      => 'nullable|string|max:50',
        ]);

        // Simpan gambar ke dalam storage
        $gambarPath = $request->file('gambar')->store('sliders', 'public');

        // Simpan data ke database
        Slider::create([
            'gambar'     => basename($gambarPath),
            'judul'      => $request->judul,
            'subtitle'   => $request->subtitle,
            'deskripsi'  => $request->deskripsi,
            'nomor'      => $request->nomor,
        ]);

        return redirect()->route('sliders.index')->with([
            'success' => 'Slider berhasil ditambahkan.',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Mengambil detail data slider berdasarkan ID.
     */
    public function show($id)
    {
        $slider = Slider::findOrFail($id);

        return response()->json(['data' => $slider]);
    }

    /**
     * Memperbarui data slider yang ada berdasarkan ID.
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        // Validasi input
        $request->validate([
            'gambar'     => 'nullable|image|max:2048',
            'judul'      => 'nullable|string|max:255',
            'subtitle'   => 'nullable|string|max:255',
            'deskripsi'  => 'nullable|string',
            'nomor'      => 'nullable|string|max:50',
        ]);

        // Jika ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            Storage::disk('public')->delete('sliders/' . $slider->gambar);

            // Simpan gambar baru
            $gambarPath     = $request->file('gambar')->store('sliders', 'public');
            $slider->gambar = basename($gambarPath);
        }

        // Perbarui data lainnya
        $slider->update([
            'judul'     => $request->judul,
            'subtitle'  => $request->subtitle,
            'deskripsi' => $request->deskripsi,
            'nomor'     => $request->nomor,
            'gambar'    => $slider->gambar, // tetap disimpan meski tidak diperbarui
        ]);

        return redirect()->route('sliders.index')->with([
            'success' => 'Slider berhasil diperbarui.',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Menghapus data slider dan file gambar terkait berdasarkan ID.
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);

        // Hapus file gambar dari storage
        Storage::disk('public')->delete('sliders/' . $slider->gambar);

        // Hapus data dari database
        $slider->delete();

        return redirect()->route('sliders.index')->with([
            'success' => 'Slider berhasil dihapus.',
            'type'    => 'bootstrap-toast',
        ]);
    }
}
