<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $fillable = [
        'nama_tugas',
        'deskripsi',
        'status_pengerjaan',
        'last_updated',
        'id_jadwal',
        'id_siswa',

    ];
}
