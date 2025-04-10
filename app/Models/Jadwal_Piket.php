<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Piket extends Model
{
    protected $fillable = [
        'hari',
        'created_at',
        'updated_at',
        'id_siswa',
    ];
}
