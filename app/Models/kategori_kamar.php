<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori_kamar extends Model
{
    protected $table = 'table_kategori_kamar';
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
        'kapasitas',
        'harga',
    ];

    public function kamar()
    {
        return $this->hasMany(Kamar::class, 'kategori_kamar_id');
    }
}
