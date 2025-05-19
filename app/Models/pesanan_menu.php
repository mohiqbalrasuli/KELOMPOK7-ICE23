<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pesanan_menu extends Model
{
    protected $table = 'pesanan_menu';
    protected $fillable = [
        'user_id',
        'menu_id',
        'jumlah',
        'total_harga',
        'kursi',
        'status',
    ];
}
