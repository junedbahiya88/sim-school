<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
    protected $fillable = [
        'kode_rekanan',
        'nama_rekanan',
        'pic',
        'pic_finance',
        'alamat',
        'npwp',
        'telp',
        'fax',
        'no_pajak',
        'tgl_mulai',
        'email',
        'pph',
        'jt',
        'is_pkp'
    ];
}
