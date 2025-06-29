<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Menampilkan daftar semua timeline.
     */
    public function index()
    {
        $timelines = Timeline::all();

        return view('back.superadmin.timelines.index', compact('timelines'));
    }

    /**
     * Menyimpan data timeline baru ke dalam database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'    => 'required|string|max:255',
            'judul'      => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
        ]);

        Timeline::create([
            'tanggal'    => $request->tanggal,
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi,
        ]);

        return redirect()->route('timelines.index')->with([
            'success' => 'Timeline berhasil ditambahkan.',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Mengambil detail timeline berdasarkan ID.
     */
    public function show($id)
    {
        $timeline = Timeline::findOrFail($id);

        return response()->json(['data' => $timeline]);
    }

    /**
     * Memperbarui data timeline yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal'    => 'required|string|max:255',
            'judul'      => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
        ]);

        $timeline = Timeline::findOrFail($id);

        $timeline->update([
            'tanggal'    => $request->tanggal,
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi,
        ]);

        return redirect()->route('timelines.index')->with([
            'success' => 'Timeline berhasil diperbarui.',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Menghapus data timeline berdasarkan ID.
     */
    public function destroy($id)
    {
        $timeline = Timeline::findOrFail($id);
        $timeline->delete();

        return redirect()->route('timelines.index')->with([
            'success' => 'Timeline berhasil dihapus.',
            'type'    => 'bootstrap-toast',
        ]);
    }
}
