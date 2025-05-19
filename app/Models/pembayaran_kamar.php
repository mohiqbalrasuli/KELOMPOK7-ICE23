<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran_kamar extends Model
{
    protected $table = 'pembayaran_kamar';
    protected $fillable = [
        'user_id',
        'pesanan_kamar_id',
        'metode_pembayaran_id',
        'kamar_id',
        'total_harga',
        'tanggal_bayar',
        'status',
    ];
}
