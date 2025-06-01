<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategori_kamar extends Model
{
    protected $table = 'table_kategori_kamar';
    protected $fillable = [
        'gambar',
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
