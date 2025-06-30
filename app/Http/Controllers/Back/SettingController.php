<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Tampilkan halaman edit pengaturan.
     */
    public function edit()
    {
        $setting = Setting::first(); // Ambil pengaturan pertama
        return view('back.superadmin.settings.index', compact('setting'));
    }

    /**
     * Update data pengaturan.
     */
    public function update(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'judul_footer'     => 'nullable|string',
            'alamat'           => 'nullable|string',
            'email'            => 'nullable|email',
            'hp'               => 'nullable|string',
            'copyright'        => 'nullable|string',
            'gambar_footer'    => 'nullable|image|max:2048',
            'gambar_header'    => 'nullable|image|max:2048',
            'gambar_login'     => 'nullable|image|max:2048',
            'gambar_register'  => 'nullable|image|max:2048',
        ]);

        try {
            // Ambil data pertama, atau buat baru jika belum ada
            $setting = Setting::first();
            if (!$setting) {
                $setting = new Setting();
            }

            // Proses upload gambar
            foreach (['footer', 'header', 'login', 'register'] as $type) {
                $key = "gambar_$type";

                if ($request->hasFile($key)) {
                    // Hapus gambar lama jika ada
                    if ($setting->$key && Storage::disk('public')->exists($setting->$key)) {
                        Storage::disk('public')->delete($setting->$key);
                    }

                    // Simpan gambar baru
                    $setting->$key = $request->file($key)->store('setting', 'public');
                }
            }

            // Isi atau perbarui kolom lainnya
            $setting->judul_footer    = $request->judul_footer;
            $setting->alamat          = $request->alamat;
            $setting->email           = $request->email;
            $setting->hp              = $request->hp;
            $setting->copyright       = $request->copyright;

            // Simpan ke database
            $setting->save();

            return redirect()->route('setting.edit')->with([
                'success' => 'Pengaturan berhasil diperbarui.',
                'type'    => 'bootstrap-toast',
            ]);
        } catch (\Exception $e) {
            return redirect()->route('setting.edit')->with([
                'success' => 'Terjadi kesalahan saat memperbarui pengaturan: ' . $e->getMessage(),
                'type'    => 'bootstrap-toast',
            ]);
        }
    }
}
