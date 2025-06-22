<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_footer')->nullable();
            $table->text('judul_footer')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('hp')->nullable();
            $table->string('copyright')->nullable();
             $table->string('gambar_header')->nullable();
            $table->string('gambar_login')->nullable();
            $table->string('gambar_register')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
