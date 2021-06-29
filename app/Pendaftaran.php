<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'jk',
        'alamat_lengkap',
        'agama',
        'asal_smp',
        'jurusan'
    ];
}
