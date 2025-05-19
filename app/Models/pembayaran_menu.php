<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran_menu extends Model
{
    protected $table = 'pembayaran_menu';
    protected $fillable = [
        'user_id',
        'pesanan_menu_id',
        'metode_pembayaran_id',
        'menu_id',
        'total_harga',
        'tanggal_pembayaran',
    ];
}
