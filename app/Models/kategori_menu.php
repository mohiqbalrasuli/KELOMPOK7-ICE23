<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori_menu extends Model
{
    protected $table = 'table_kategori_menu';
    protected $fillable = [
        'nama_kategori_menu',
        'deskripsi',
    ];
}
