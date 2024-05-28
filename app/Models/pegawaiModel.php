<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawaiModel extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = [
        'nik',
        'nama_pegawai',
        'alamat',
        'jkel',
        'jenis',
        'unit',
        'tgl_lahir',
        'no_tlp',
    ];
}
