<?php

namespace App\Http\Controllers\Back\Siswa;

use App\Http\Controllers\Controller;
use App\Models\AchievementTrack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class JalurPrestasiController extends Controller
{
    /**
     * Menampilkan halaman utama jalur prestasi siswa.
     */
    public function index()
    {
        $prestasi = AchievementTrack::with('user')->where('user_id', Auth::id())->first();
        return view('back.siswa.daftar-jalur.prestasi.index', compact('prestasi'));
    }

    /**
     * Menampilkan form untuk input data jalur prestasi.
     */
    public function create()
    {
        return view('back.siswa.daftar-jalur.prestasi.create');
    }

    /**
     * Menyimpan data jalur prestasi baru ke database.
     */
    public function store(Request $request)
    {
        try {
            // Validasi data input
            $request->validate([
                'skl_ijazah' => 'required|file|mimes:png,jpg,jpeg,pdf',
                'kartu_keluarga' => 'required|file|mimes:png,jpg,jpeg,pdf',
                'rapot_kelas6_semester1' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'rapot_kelas6_semester2' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'nilai.*' => 'nullable|numeric|min:0|max:100',
                'sertifikat_akademik_kabkota_1' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'sertifikat_akademik_provinsi_1' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'nilai_akademik_kabkota_1' => 'nullable|numeric|min:0|max:100',
                'nilai_akademik_provinsi_1' => 'nullable|numeric|min:0|max:100',
            ]);

            // Simpan file dasar (ijazah, kk)
            $data = [
                'user_id' => Auth::id(),
                'skl_ijazah' => $request->file('skl_ijazah')->store('uploads/prestasi', 'public'),
                'kartu_keluarga' => $request->file('kartu_keluarga')->store('uploads/prestasi', 'public'),
            ];

            // Proses nilai rapot per semester
            $semesters = [
                ['kelas' => 6, 'semester' => 1],
                ['kelas' => 6, 'semester' => 2],
            ];

            foreach ($semesters as $s) {
                $kelas = $s['kelas'];
                $semester = $s['semester'];
                $rapotField = "rapot_kelas{$kelas}_semester{$semester}";

                if ($request->hasFile($rapotField)) {
                    $data[$rapotField] = $request->file($rapotField)->store('uploads/prestasi', 'public');
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

            // Proses sertifikat dan nilai
            $kategori = ['akademik', 'non_akademik'];
            $tingkats = ['kabkota', 'provinsi', 'nasional', 'internasional'];
            $totalSertifikatNilai = 0;

            foreach ($kategori as $kat) {
                foreach ($tingkats as $tingkat) {
                    for ($i = 1; $i <= 2; $i++) {
                        $sertifikatField = "sertifikat_{$kat}_{$tingkat}_{$i}";
                        $nilaiField = "nilai_{$kat}_{$tingkat}_{$i}";

                        if ($request->hasFile($sertifikatField)) {
                            $data[$sertifikatField] = $request->file($sertifikatField)->store("uploads/prestasi/{$kat}/{$tingkat}", 'public');
                        }

                        $nilai = $request->input($nilaiField, 0);
                        $data[$nilaiField] = $nilai;
                        $totalSertifikatNilai += $nilai;
                    }
                }
            }

            $data['total_nilai_sertifikat'] = $totalSertifikatNilai;

            // Hitung rata-rata keseluruhan
            $totalRataRata = 0;
            foreach ($semesters as $s) {
                $rataRataField = "rata_rata_kelas{$s['kelas']}_semester{$s['semester']}";
                $totalRataRata += $data[$rataRataField];
            }
            $data['rata_rata_keseluruhan'] = round($totalRataRata / count($semesters), 2);

            AchievementTrack::create($data);

            return redirect()->route('prestasi-siswa.index')->with(['success' => 'Data prestasi berhasil disimpan!.', 'type' => 'bootstrap-toast']);

        } catch (\Exception $e) {
            return redirect()->route('prestasi-siswa.index')->with(['error' => 'Terjadi kesalahan saat menyimpan data. ' . $e->getMessage(), 'type' => 'bootstrap-toast']);
        }
    }

    /**
     * Menampilkan form edit prestasi siswa.
     */
    public function edit($id)
    {
        $prestasi = AchievementTrack::where('user_id', Auth::id())->findOrFail($id);
        return view('back.siswa.daftar-jalur.prestasi.edit', compact('prestasi'));
    }

    /**
     * Memperbarui data prestasi siswa.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'skl_ijazah' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'kartu_keluarga' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'rapot_kelas6_semester1' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'rapot_kelas6_semester2' => 'nullable|file|mimes:png,jpg,jpeg,pdf',
                'nilai.*' => 'nullable|numeric|min:0|max:100',
            ]);

            $prestasi = AchievementTrack::where('user_id', Auth::id())->findOrFail($id);
            $data = [];

            $fileFields = ['skl_ijazah', 'kartu_keluarga'];
            foreach ($fileFields as $field) {
                if ($request->hasFile($field)) {
                    $data[$field] = $request->file($field)->store('uploads/prestasi', 'public');
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
                    $data[$rapotField] = $request->file($rapotField)->store('uploads/prestasi', 'public');
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

            $kategori = ['akademik', 'non_akademik'];
            $tingkats = ['kabkota', 'provinsi', 'nasional', 'internasional'];
            $totalSertifikatNilai = 0;

            foreach ($kategori as $kat) {
                foreach ($tingkats as $tingkat) {
                    for ($i = 1; $i <= 2; $i++) {
                        $sertifikatField = "sertifikat_{$kat}_{$tingkat}_{$i}";
                        $nilaiField = "nilai_{$kat}_{$tingkat}_{$i}";

                        if ($request->hasFile($sertifikatField)) {
                            $data[$sertifikatField] = $request->file($sertifikatField)->store("uploads/prestasi/{$kat}/{$tingkat}", 'public');
                        }

                        $nilai = $request->input($nilaiField, 0);
                        $data[$nilaiField] = $nilai;
                        $totalSertifikatNilai += $nilai;
                    }
                }
            }

            $data['total_nilai_sertifikat'] = $totalSertifikatNilai;

            $totalRataRata = 0;
            foreach ($semesters as $s) {
                $rataRataField = "rata_rata_kelas{$s['kelas']}_semester{$s['semester']}";
                $totalRataRata += $data[$rataRataField];
            }
            $data['rata_rata_keseluruhan'] = round($totalRataRata / count($semesters), 2);

            $prestasi->update($data);

            return redirect()->route('prestasi-siswa.index')->with(['success' => 'Data prestasi berhasil diperbarui!', 'type' => 'bootstrap-toast']);

        } catch (\Exception $e) {
            return redirect()->route('prestasi-siswa.index')->with(['error' => 'Terjadi kesalahan saat memperbarui data. ' . $e->getMessage(), 'type' => 'bootstrap-toast']);
        }
    }

    /**
     * Menghasilkan PDF kartu pendaftaran berdasarkan data prestasi siswa.
     */
    public function cetakKartu($id)
    {
        $prestasi = AchievementTrack::with([
            'user.sekolah',
            'student.parent',
            'student.guardian'
        ])->findOrFail($id);

        $pdf = Pdf::loadView('back.siswa.daftar-jalur.prestasi.kartu_pendaftaran', compact('prestasi'))
            ->setPaper('a4', 'portrait');

        $userName = str_replace(' ', '_', strtolower($prestasi->user->name));
        $fileName = 'jalur_prestasi_' . $userName . '.pdf';

        return $pdf->download($fileName);
    }
}