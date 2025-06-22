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
        Schema::create('achievement_tracks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('skl_ijazah');
            $table->string('kartu_keluarga');

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

            foreach (['kabkota', 'provinsi', 'nasional', 'internasional'] as $tingkat) {
                $max = $tingkat === 'kabkota' ? 2 : 1;
                for ($i = 1; $i <= $max; $i++) {
                    $table->string("sertifikat_akademik_{$tingkat}_{$i}")->nullable();
                    $table->float("nilai_akademik_{$tingkat}_{$i}")->nullable();
                }
            }
            foreach (['kabkota', 'provinsi', 'nasional', 'internasional'] as $tingkat) {
                $max = $tingkat === 'kabkota' ? 2 : 1;
                for ($i = 1; $i <= $max; $i++) {
                    $table->string("sertifikat_non_akademik_{$tingkat}_{$i}")->nullable();
                    $table->float("nilai_non_akademik_{$tingkat}_{$i}")->nullable();
                }
            }

            $table->float('total_nilai_sertifikat')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement_tracks');
    }
};
