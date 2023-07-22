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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->string('nama_lengkap', 100);
            $table->char('gender', 1);
            $table->string('tmp_lahir', 100);
            $table->date('tgl_lahir',);
            $table->string('tlp', 15);
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
