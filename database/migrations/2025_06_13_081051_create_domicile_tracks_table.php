<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('domicile_tracks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('skl_ijazah');
            $table->string('kartu_keluarga');
            $table->string('dokumen_pendukung');
            $table->decimal('latitude', 10, 7);   
            $table->decimal('longitude', 10, 7);  
            $table->decimal('jarak_km', 8, 2);   

            $kelas_semesters = [
                'kelas6_semester1',
                'kelas6_semester2'
            ];

            foreach ($kelas_semesters as $ks) {
                $table->string("rapot_{$ks}");
                $table->float("nilai_b_indo_{$ks}");
                $table->float("nilai_matematika_{$ks}");
                $table->float("nilai_ipa_{$ks}");
                $table->float("nilai_b_inggris_{$ks}");
                $table->float("nilai_pai_{$ks}");
                $table->float("rata_rata_{$ks}");
            }
            $table->float('rata_rata_keseluruhan');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domicile_tracks');
    }
};
