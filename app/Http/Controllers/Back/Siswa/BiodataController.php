<?php

namespace App\Http\Controllers\Back\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Guardian;
use App\Models\ParentStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Exception;

class BiodataController extends Controller
{
    /**
     * Tampilkan halaman biodata untuk siswa yang sedang login.
     */
    public function index()
    {
        $user = auth()->user();

        // Ambil biodata siswa beserta data relasi orang tua dan wali
        $biodata = $user->biodata()->with('parent', 'guardian')->first();

        return view('back.siswa.biodata.index', compact('user', 'biodata'));
    }

    /**
     * Simpan data biodata siswa baru.
     */
    public function store(Request $request)
    {
        Log::info('Mulai proses penyimpanan siswa', ['request_data' => $request->all()]);

        // Validasi data utama siswa
        $request->validate([
            'nisn' => 'required|string|max:20|unique:students,nisn,NULL,id',
            'nik' => 'required|string|max:20|unique:students,nik,NULL,id',
            'no_kk' => 'required|string|max:20',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:100',
            'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha,Konghucu,Lainnya',
            'alamat' => 'required|string',
            'tinggal_dengan' => 'required|in:Orang Tua,Wali',
            'pas_foto' => 'required|image|max:2048',
        ]);

        DB::beginTransaction();
        $imagePath = $request->file('pas_foto')->store('siswa', 'public');

        try {
            // Simpan data siswa ke tabel students
            $student = Student::create([
                'nisn' => $request->nisn,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'tempat_lahir' => $request->tempat_lahir,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'kecamatan' => $request->district_name,
                'kelurahan' => $request->village_name,
                'asal_sekolah' => $request->asal_sekolah,
                'alamat_asal_sekolah' => $request->alamat_asal_sekolah,
                'tinggal_dengan' => $request->tinggal_dengan,
                'user_id' => Auth::id(),
                'pas_foto' => $imagePath,
            ]);

            // Jika siswa tinggal dengan orang tua, simpan data orang tua
            if (in_array($request->tinggal_dengan, ['Orang Tua', 'Wali'])) {
                $request->validate([
                    'nama_ayah' => 'required|string|max:100',
                    'pekerjaan_ayah' => 'nullable|string|max:100',
                    'nama_ibu' => 'required|string|max:100',
                    'pekerjaan_ibu' => 'nullable|string|max:100',
                    'alamat_ortu' => 'required|string',
                    'hp_ortu' => 'nullable|string|digits_between:10,15',
                ]);

                ParentStudent::create([
                    'student_id' => $student->id,
                    'nama_ayah' => $request->nama_ayah,
                    'pekerjaan_ayah' => $request->pekerjaan_ayah,
                    'nama_ibu' => $request->nama_ibu,
                    'pekerjaan_ibu' => $request->pekerjaan_ibu,
                    'alamat' => $request->alamat_ortu,
                    'no_hp' => $request->hp_ortu,
                ]);
            }

            // Jika siswa tinggal dengan wali, simpan data wali
            if ($request->tinggal_dengan === "Wali") {
                $request->validate([
                    'nama_wali' => 'required|string|max:100',
                    'pekerjaan_wali' => 'nullable|string|max:100',
                    'alamat_wali' => 'required|string',
                    'no_hp_wali' => 'nullable|string|digits_between:10,15',
                ]);

                Guardian::create([
                    'student_id' => $student->id,
                    'nama_wali' => $request->nama_wali,
                    'pekerjaan_wali' => $request->pekerjaan_wali,
                    'alamat' => $request->alamat_wali,
                    'no_hp' => $request->no_hp_wali,
                ]);
            }

            DB::commit();
            return redirect()->route('biodata.index')->with([
                'success' => 'Data siswa berhasil ditambahkan.',
                'type' => 'bootstrap-toast'
            ]);
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->back()->with([
                'error' => 'Terjadi kesalahan: ' . $e->getMessage(),
                'type' => 'bootstrap-toast'
            ]);
        }
    }

    /**
     * Tampilkan detail biodata dalam format JSON.
     */
    public function show($id)
    {
        try {
            $student = Student::with(['parent', 'guardian'])->findOrFail($id);
            return response()->json(['data' => $student]);
        } catch (Exception $e) {
            Log::error('Biodata tidak ditemukan:', ['id' => $id, 'error' => $e->getMessage()]);
            return response()->json(['error' => 'Biodata tidak ditemukan!'], 404);
        }
    }

    /**
     * Update data biodata siswa.
     */
    public function update(Request $request, $id)
    {
        try {
            // Validasi data yang akan diperbarui
            $validatedData = $request->validate([
                'nisn' => 'required|string|max:20|unique:students,nisn,' . $id,
                'nik' => 'required|string|max:20',
                'no_kk' => 'required|string|max:20',
                'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
                'tanggal_lahir' => 'required|date',
                'tempat_lahir' => 'required|string|max:255',
                'agama' => 'required|string|max:50',
                'alamat' => 'required|string|max:255',
                'tinggal_dengan' => 'required|string|in:Orang Tua,Wali',
                'nama_ayah' => 'nullable|string|max:255',
                'pekerjaan_ayah' => 'nullable|string|max:255',
                'nama_ibu' => 'nullable|string|max:255',
                'pekerjaan_ibu' => 'nullable|string|max:255',
                'hp_ortu' => 'nullable|string|max:20',
                'alamat_ortu' => 'nullable|string|max:255',
                'nama_wali' => 'nullable|string|max:255',
                'pekerjaan_wali' => 'nullable|string|max:255',
                'alamat_wali' => 'nullable|string|max:255',
                'no_hp_wali' => 'nullable|string|max:20',
                'asal_sekolah' => 'nullable|string|max:20',
                'alamat_asal_sekolah' => 'nullable|string|max:20',
                'kecamatan' => 'nullable|string|max:20',
                'kelurahan' => 'nullable|string|max:20',
                'pas_foto' => 'nullable|image|max:2048',
            ]);

            $student = Student::findOrFail($id);

            // Jika ada foto baru, simpan dan hapus yang lama
            if ($request->hasFile('pas_foto')) {
                if ($student->pas_foto && Storage::disk('public')->exists($student->pas_foto)) {
                    Storage::disk('public')->delete($student->pas_foto);
                }

                $imagePath = $request->file('pas_foto')->store('siswa', 'public');
                $validatedData['pas_foto'] = $imagePath;
            }

            // Update data siswa
            $student->update($validatedData);

            // Update data orang tua jika tinggal dengan orang tua
            if ($validatedData['tinggal_dengan'] === 'Orang Tua') {
                ParentStudent::updateOrCreate(
                    ['student_id' => $id],
                    [
                        'nama_ayah' => $validatedData['nama_ayah'],
                        'pekerjaan_ayah' => $validatedData['pekerjaan_ayah'],
                        'nama_ibu' => $validatedData['nama_ibu'],
                        'pekerjaan_ibu' => $validatedData['pekerjaan_ibu'],
                        'alamat' => $validatedData['alamat_ortu'],
                        'no_hp' => $validatedData['hp_ortu'],
                    ]
                );
            }

            // Update data wali jika tinggal dengan wali
            if ($validatedData['tinggal_dengan'] === 'Wali') {
                Guardian::updateOrCreate(
                    ['student_id' => $id],
                    [
                        'nama_wali' => $validatedData['nama_wali'],
                        'pekerjaan_wali' => $validatedData['pekerjaan_wali'],
                        'alamat' => $validatedData['alamat_wali'],
                        'no_hp' => $validatedData['no_hp_wali'],
                    ]
                );
            }

            return redirect()->route('biodata.index')->with([
                'success' => 'Biodata berhasil diperbarui!',
                'type' => 'bootstrap-toast'
            ]);
        } catch (Exception $e) {
            Log::error('Error updating Biodata:', ['error' => $e->getMessage()]);
            return redirect()->back()
                ->withErrors(['error' => 'Gagal memperbarui biodata. Silakan coba lagi.'])
                ->with('type', 'bootstrap-toast');
        }
    }

}
