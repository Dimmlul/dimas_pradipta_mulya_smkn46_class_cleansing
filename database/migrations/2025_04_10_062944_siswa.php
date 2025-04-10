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
            $table->id('id_siswa')->primary();
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->integer('no_induk');
            $table->timestamp('last_updated')->useCurrent();
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
