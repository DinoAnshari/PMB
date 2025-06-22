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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn')->unique();
            $table->string('nik')->unique();
            $table->string('no_kk')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('agama')->nullable();
            $table->text('alamat')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->text('alamat_asal_sekolah')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('tinggal_dengan')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
