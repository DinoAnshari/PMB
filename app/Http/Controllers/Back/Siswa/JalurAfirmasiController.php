<?php

namespace App\Http\Controllers\Back\Siswa;

use App\Http\Controllers\Controller;
use App\Models\AffirmationTrack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class JalurAfirmasiController extends Controller
{
    public function index()
    {
        $afirmasi = AffirmationTrack::with('user')->where('user_id', Auth::id())->first();
        return view('back.siswa.daftar-jalur.afirmasi.index', compact('afirmasi'));
    }

    public function create()
    {
        return view('back.siswa.daftar-jalur.afirmasi.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'skl_ijazah' => 'required|file|mimes:png,jpg,jpeg,pdf',
                'kartu_keluarga' => 'required|file|mimes:png,jpg,jpeg,pdf',
                'dokumen_pendukung' => 'nullable|file|mimes:png,jpg,jpeg,pdf',

                'rapot_kelas6_semester1' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'rapot_kelas6_semester2' => 'nullable|file|mimes:png,jpg,jpeg,pdf',

                'nilai.*' => 'nullable|numeric|min:0|max:100',
            ]);

            $data = [
                'user_id' => Auth::id(),
                'skl_ijazah' => $request->file('skl_ijazah')->store('uploads/afirmasi', 'public'),
                'kartu_keluarga' => $request->file('kartu_keluarga')->store('uploads/afirmasi', 'public'),
            ];

            if ($request->hasFile('dokumen_pendukung')) {
                $data['dokumen_pendukung'] = $request->file('dokumen_pendukung')->store('uploads/afirmasi', 'public');
            }

            $semesters = [
                ['kelas' => 6, 'semester' => 1],
                ['kelas' => 6, 'semester' => 2],
            ];

            foreach ($semesters as $s) {
                $kelas = $s['kelas'];
                $semester = $s['semester'];
                $rapotField = "rapot_kelas{$kelas}_semester{$semester}";

                if ($request->hasFile($rapotField)) {
                    $data[$rapotField] = $request->file($rapotField)->store('uploads/afirmasi', 'public');
                }

                $mapel = ['b_indo', 'matematika', 'ipa', 'b_inggris', 'pai'];
                $totalNilai = 0;

                foreach ($mapel as $kode) {
                    $nilaiField = "nilai_{$kode}_kelas{$kelas}_semester{$semester}";
                    $nilai = $request->input($nilaiField, 0);
                    $data[$nilaiField] = $nilai;
                    $totalNilai += $nilai;
                }

                $data["rata_rata_kelas{$kelas}_semester{$semester}"] = round($totalNilai / count($mapel), 2);
            }

            $data['rata_rata_keseluruhan'] = round(
                ($data['rata_rata_kelas6_semester1'] + $data['rata_rata_kelas6_semester2']) / 2,
                2
            );

            AffirmationTrack::create($data);

            return redirect()->route('afirmasi-siswa.index')->with(['success' => 'Data afirmasi berhasil disimpan!', 'type' => 'bootstrap-toast']);
        } catch (\Exception $e) {
            return redirect()->route('afirmasi-siswa.index')->with(['error' => 'Terjadi kesalahan saat menyimpan data. ' . $e->getMessage(), 'type' => 'bootstrap-toast']);
        }
    }

    public function edit($id)
    {
        $afirmasi = AffirmationTrack::where('user_id', Auth::id())->findOrFail($id);
        return view('back.siswa.daftar-jalur.afirmasi.edit', compact('afirmasi'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'skl_ijazah' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'kartu_keluarga' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'dokumen_pendukung' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'rapot_kelas6_semester1' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'rapot_kelas6_semester2' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'nilai.*' => 'nullable|numeric|min:0|max:100',
            ]);

            $afirmasi = AffirmationTrack::where('user_id', Auth::id())->findOrFail($id);
            $data = [];

            $files = ['skl_ijazah', 'kartu_keluarga', 'dokumen_pendukung'];
            foreach ($files as $file) {
                if ($request->hasFile($file)) {
                    $data[$file] = $request->file($file)->store('uploads/afirmasi', 'public');
                }
            }

            $semesters = [
                ['kelas' => 6, 'semester' => 1],
                ['kelas' => 6, 'semester' => 2],
            ];

            foreach ($semesters as $s) {
                $kelas = $s['kelas'];
                $semester = $s['semester'];
                $rapotField = "rapot_kelas{$kelas}_semester{$semester}";

                if ($request->hasFile($rapotField)) {
                    $data[$rapotField] = $request->file($rapotField)->store('uploads/afirmasi', 'public');
                }

                $mapel = ['b_indo', 'matematika', 'ipa', 'b_inggris', 'pai'];
                $totalNilai = 0;

                foreach ($mapel as $kode) {
                    $nilaiField = "nilai_{$kode}_kelas{$kelas}_semester{$semester}";
                    $nilai = $request->input($nilaiField, 0);
                    $data[$nilaiField] = $nilai;
                    $totalNilai += $nilai;
                }

                $data["rata_rata_kelas{$kelas}_semester{$semester}"] = round($totalNilai / count($mapel), 2);
            }

            $data['rata_rata_keseluruhan'] = round(
                ($data['rata_rata_kelas6_semester1'] + $data['rata_rata_kelas6_semester2']) / 2,
                2
            );

            $afirmasi->update($data);

            return redirect()->route('afirmasi-siswa.index')->with(['success' => 'Data afirmasi berhasil diperbarui!', 'type' => 'bootstrap-toast']);
        } catch (\Exception $e) {
            return redirect()->route('afirmasi-siswa.index')->with(['error' => 'Terjadi kesalahan saat memperbarui data. ' . $e->getMessage(), 'type' => 'bootstrap-toast']);
        }
    }

    public function cetakKartu($id)
    {
        $afirmasi = AffirmationTrack::with([
            'user.sekolah',
            'student.parent',
            'student.guardian'
        ])->findOrFail($id);

        $pdf = Pdf::loadView('back.siswa.daftar-jalur.afirmasi.kartu_pendaftaran', compact('afirmasi'))
            ->setPaper('a4', 'portrait');

        $userName = str_replace(' ', '_', strtolower($afirmasi->user->name));
        $fileName = 'jalur_afirmasi_' . $userName . '.pdf';

        return $pdf->download($fileName);
    }
}
