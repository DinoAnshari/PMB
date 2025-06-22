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
        Schema::create('document_statuses', function (Blueprint $table) {
            $table->id();
            $table->morphs('pendaftaran');
            $table->enum('jalur', ['Prestasi', 'Afirmasi', 'Domisili']);
            $table->enum('status', ['Lulus Berkas', 'Tidak Lulus Berkas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_statuses');
    }
};
