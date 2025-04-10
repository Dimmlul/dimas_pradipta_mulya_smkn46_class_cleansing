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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id('id_tugas');
            $table->string('nama_tugas');
            $table->text('deskripsi');
            $table->enum('status_pengerjaan', ['done', 'in_progress']);
            $table->timestamp('last_updated')->useCurrent();

            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwal_piket');
            $table->foreign('id_siswa')->references('id_siswa')->on('siswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
