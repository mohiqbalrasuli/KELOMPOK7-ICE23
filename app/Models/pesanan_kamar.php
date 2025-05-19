<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pesanan_kamar extends Model
{
    protected $table = 'pesanan_kamar';
    protected $fillable = [
        'user_id',
        'kamar_id',
        'no_telepon',
        'jumlah_orang',
        'tanggal_checkin',
        'tanggal_checkout',
        'total_harga',
        'status',
    ];
}
