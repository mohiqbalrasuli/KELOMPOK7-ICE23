<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori_kamar extends Model
{
    protected $table = 'kategori_kamar';
    protected $fillable = [
        'nama_kategori',
        'harga',
        'deskripsi',
        'kapasitas',
        'harga',
    ];
}
