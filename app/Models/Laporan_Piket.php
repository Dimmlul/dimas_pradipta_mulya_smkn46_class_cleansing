<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan_Piket extends Model
{
    protected $fillable = [
        'status',
        'keterangan',
        'photo',
        'id_tugas',
        'id_siswa',
        'id_jadwal_piket',

    ];
}
