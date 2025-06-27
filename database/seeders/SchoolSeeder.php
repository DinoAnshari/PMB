<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    public function run(): void
    {
        School::create([
            'nama_sekolah' => 'SMPN 1 Maju Jaya',
            'alamat_sekolah' => 'Jl. Pendidikan No.123, Maju Jaya'
        ]);
    }
}
