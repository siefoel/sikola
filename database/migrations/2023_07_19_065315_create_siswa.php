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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nis', 24)->unique();
            $table->string('nisn', 24)->unique();
            $table->foreignId('users_id');
            $table->foreignId('sekolah_id');
            $table->foreignId('jurusan_id');
            $table->foreignId('kelas_id');
            $table->foreignId('tahunajaran_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
