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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('npsn', 20)->unique();
            $table->string('nama_sekolah',100);
            $table->string('email_sekolah',100);
            $table->string('tlp_sekolah',16);
            $table->string('alamat_sekolah',150);
            $table->enum('jenjang_sekolah',['sd','smp','smk','sma']);
            $table->enum('jenis_sekolah',['swasta','negeri']);
            $table->string('npsn')->nullable();
            $table->string('logo_sekolah')->nullable();
            $table->char('status',1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
