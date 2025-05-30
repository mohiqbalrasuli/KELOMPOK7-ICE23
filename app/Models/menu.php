<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'table_menu';
    protected $fillable = [
        'gambar',
        'nama_menu',
        'harga',
        'kategori_menu_id',
    ];
    public function kategori_menu()
    {
        return $this->belongsTo(kategori_menu::class, 'kategori_menu_id', 'id');
    }
}
