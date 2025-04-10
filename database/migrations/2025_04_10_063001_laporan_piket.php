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
        Schema::create('laporan_piket', function (Blueprint $table) {
            $table->id('id_laporan_piket')->primary();
            $table->enum('status', ['selesai', 'belum selesai']);
            $table->text('keterangan');
            $table->string('photo');

            $table->integer('id_tugas');
            $table->integer('id_siswa');
            $table->integer('id_jadwal_piket');

            $table->foreign('id_tugas')->references('id_tugas')->on('tugas');
            $table->foreign('id_siswa')->references('id_siswa')->on('siswa');
            $table->foreign('id_jadwal_piket')->references('id_jadwal')->on('jadwal_piket');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_piket');
    }
};
