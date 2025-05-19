<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'table_menu';
    protected $fillable = [
        'nama_menu',
        'harga',
        'kategori_menu_id',
    ];
}
