<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\AchievementTrack;
use App\Models\DomicileTrack;
use App\Models\AffirmationTrack;
use Illuminate\Http\Request;

class PemeriksaController extends Controller
{

    /**
     * Tampilkan daftar track jalur Prestasi berdasarkan sekolah user.
     *
     * @return \Illuminate\View\View
     */
    public function indexPrestasi()
    {
        $achievementTracks = $this->getTracks(AchievementTrack::class);
        return view('back.pemeriksa.prestasi.index', compact('achievementTracks'));
    }

    /**
     * Tampilkan detail track Prestasi.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function showPrestasi($id)
    {
        $achievementTrack = $this->findTrackWithRelations(AchievementTrack::class, $id);
        return view('back.pemeriksa.prestasi.show', compact('achievementTrack'));
    }

    /**
     * Perbarui status berkas pada jalur Prestasi.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePrestasi(Request $request, $id)
    {
        return $this->updateStatus(AchievementTrack::class, $id, 'Prestasi', $request);
    }


    /**
     * Tampilkan daftar track jalur Domisili berdasarkan sekolah user.
     *
     * @return \Illuminate\View\View
     */
    public function indexDomisili()
    {
        $domicileTracks = $this->getTracks(DomicileTrack::class);
        return view('back.pemeriksa.domisili.index', compact('domicileTracks'));
    }

    /**
     * Tampilkan detail track Domisili.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function showDomisili($id)
    {
        $domicileTrack = $this->findTrackWithRelations(DomicileTrack::class, $id);
        return view('back.pemeriksa.domisili.show', compact('domicileTrack'));
    }

    /**
     * Perbarui status berkas pada jalur Domisili.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateDomisili(Request $request, $id)
    {
        return $this->updateStatus(DomicileTrack::class, $id, 'Domisili', $request);
    }


    /**
     * Tampilkan daftar track jalur Afirmasi berdasarkan sekolah user.
     *
     * @return \Illuminate\View\View
     */
    public function indexAfirmasi()
    {
        $affirmationTracks = $this->getTracks(AffirmationTrack::class);
        return view('back.pemeriksa.afirmasi.index', compact('affirmationTracks'));
    }

    /**
     * Tampilkan detail track Afirmasi.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function showAfirmasi($id)
    {
        $affirmationTrack = $this->findTrackWithRelations(AffirmationTrack::class, $id);
        return view('back.pemeriksa.afirmasi.show', compact('affirmationTrack'));
    }

    /**
     * Perbarui status berkas pada jalur Afirmasi.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAfirmasi(Request $request, $id)
    {
        return $this->updateStatus(AffirmationTrack::class, $id, 'Afirmasi', $request);
    }


    /**
     * Ambil seluruh track berdasarkan sekolah dari user yang login.
     *
     * @param string $modelClass
     * @return \Illuminate\Support\Collection
     */
    private function getTracks(string $modelClass)
    {
        return $modelClass::whereHas('user', function ($query) {
                $query->where('sekolah_id', auth()->user()->sekolah_id);
            })
            ->with(['user.sekolah'])
            ->orderByDesc('rata_rata_keseluruhan')
            ->get();
    }

    /**
     * Ambil track berdasarkan ID beserta relasi yang dibutuhkan.
     *
     * @param string $modelClass
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    private function findTrackWithRelations(string $modelClass, $id)
    {
        return $modelClass::with(['user', 'student.parent', 'student.guardian'])->findOrFail($id);
    }

    /**
     * Update status berkas untuk jalur tertentu.
     *
     * @param string $modelClass
     * @param int $id
     * @param string $jalur
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    private function updateStatus(string $modelClass, $id, string $jalur, Request $request)
    {
        $track = $modelClass::findOrFail($id);

        $track->statusBerkas()->updateOrCreate(
            [
                'pendaftaran_id'   => $id,
                'pendaftaran_type' => $modelClass,
            ],
            [
                'jalur'  => $jalur,
                'status' => $request->input('status'),
            ]
        );

        return redirect()->back()->with([
            'success' => "Status berkas Jalur $jalur berhasil diperbarui!",
            'type'    => 'bootstrap-toast',
        ]);
    }
}
