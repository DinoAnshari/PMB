<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat Super Admin
        $superAdmin = User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );
        $superAdmin->assignRole('super admin');

        // Ambil semua sekolah
        $schools = School::all();

        // Daftar role yang akan dibuatkan user untuk setiap sekolah
        $roles = [
            'admin' => 'Admin',
            'pemeriksa prestasi' => 'Pemeriksa Prestasi',
            'pemeriksa afirmasi' => 'Pemeriksa Afirmasi',
            'pemeriksa domisili' => 'Pemeriksa Domisili',
        ];

        foreach ($schools as $school) {
            foreach ($roles as $slug => $roleName) {
                $email = "{$slug}.{$school->id}@example.com";

                $user = User::firstOrCreate(
                    ['email' => $email],
                    [
                        'name' => "$roleName - {$school->nama_sekolah}",
                        'password' => Hash::make('password'),
                        'sekolah_id' => $school->id,
                    ]
                );

                $user->assignRole("$slug {$school->nama_sekolah}");
            }
        }
    }
}
