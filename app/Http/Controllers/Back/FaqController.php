<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Menampilkan daftar semua FAQ.
     */
    public function index()
    {
        $faqs = Faq::all();

        return view('back.superadmin.faqs.index', compact('faqs'));
    }

    /**
     * Menyimpan data FAQ baru ke dalam database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pertanyaan'   => 'required|string|max:255',
            'jawaban'     => 'required|string',
            'is_active'  => 'required|boolean',
        ]);

        Faq::create($validated);

        return redirect()->route('faqs.index')->with([
            'success' => 'FAQ berhasil ditambahkan.',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Menampilkan detail data FAQ berdasarkan ID.
     */
    public function show($id)
    {
        $faq = Faq::findOrFail($id);

        return response()->json(['data' => $faq]);
    }

    /**
     * Memperbarui data FAQ yang sudah ada.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'pertanyaan'   => 'required|string|max:255',
            'jawaban'     => 'required|string',
            'is_active'  => 'required|boolean',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update($validated);

        return redirect()->route('faqs.index')->with([
            'success' => 'FAQ berhasil diperbarui.',
            'type'    => 'bootstrap-toast',
        ]);
    }

    /**
     * Menghapus data FAQ berdasarkan ID.
     */
    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('faqs.index')->with([
            'success' => 'FAQ berhasil dihapus.',
            'type'    => 'bootstrap-toast',
        ]);
    }
}
