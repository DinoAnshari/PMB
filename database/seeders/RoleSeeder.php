<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role super admin (global, tidak terikat sekolah)
        Role::firstOrCreate(['name' => 'super admin']);

        // Ambil semua sekolah
        $schools = School::all();

        // Daftar role untuk setiap sekolah
        $roles = [
            'admin',
            'pemeriksa prestasi',
            'pemeriksa afirmasi',
            'pemeriksa domisili',
        ];

        // Buat role untuk masing-masing sekolah
        foreach ($schools as $school) {
            foreach ($roles as $role) {
                Role::firstOrCreate([
                    'name' => "$role {$school->nama_sekolah}"
                ]);
            }
        }
    }
}
