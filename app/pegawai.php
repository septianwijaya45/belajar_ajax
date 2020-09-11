<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $fillable = [
        'nama_pegawai',
        'jenis_kelamin',
        'email',
        'alamat',
        'created_at',
        'updated_at',
    ];
}
