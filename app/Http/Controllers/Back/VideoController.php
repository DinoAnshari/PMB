<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Tampilkan semua video.
     */
    public function index()
    {
        $videos = Video::all();
        return view('back.superadmin.videos.index', compact('videos'));
    }

    /**
     * Simpan video baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi inputan dari form
        $request->validate([
            'title'      => 'required|string|max:255',
            'deskripsi'  => 'required|string',
            'image'      => 'required|image|max:2048',
            'video_url'  => 'required|url',
        ]);

        // Upload dan simpan gambar ke storage
        $imagePath = $request->file('image')->store('videos', 'public');

        // Simpan data ke database
        Video::create([
            'title'      => $request->title,
            'deskripsi'  => $request->deskripsi,
            'image'      => basename($imagePath),
            'video_url'  => $request->video_url,
        ]);

        return redirect()->route('videos.index')->with([
            'success' => 'Video berhasil ditambahkan',
            'type'    => 'bootstrap-toast'
        ]);
    }

    /**
     * Tampilkan detail video (biasanya untuk modal edit).
     */
    public function show($id)
    {
        $video = Video::findOrFail($id);
        return response()->json(['data' => $video]);
    }

    /**
     * Perbarui data video.
     */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        // Validasi input, semua field opsional
        $request->validate([
            'title'      => 'nullable|string|max:255',
            'deskripsi'  => 'nullable|string',
            'image'      => 'nullable|image|max:2048',
            'video_url'  => 'nullable|url',
        ]);

        // Jika ada gambar baru, hapus gambar lama dan simpan yang baru
        if ($request->hasFile('image')) {
            if ($video->image && Storage::disk('public')->exists('videos/' . $video->image)) {
                Storage::disk('public')->delete('videos/' . $video->image);
            }

            $imagePath = $request->file('image')->store('videos', 'public');
            $video->image = basename($imagePath);
        }

        // Update hanya jika ada perubahan
        $video->update([
            'title'      => $request->title ?? $video->title,
            'deskripsi'  => $request->deskripsi ?? $video->deskripsi,
            'video_url'  => $request->video_url ?? $video->video_url,
        ]);

        return redirect()->route('videos.index')->with([
            'success' => 'Video berhasil diperbarui',
            'type'    => 'bootstrap-toast'
        ]);
    }

    /**
     * Hapus video dari database dan storage.
     */
    public function destroy($id)
    {
        $video = Video::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($video->image && Storage::disk('public')->exists('videos/' . $video->image)) {
            Storage::disk('public')->delete('videos/' . $video->image);
        }

        $video->delete();

        return redirect()->route('videos.index')->with([
            'success' => 'Video berhasil dihapus',
            'type'    => 'bootstrap-toast'
        ]);
    }
}
