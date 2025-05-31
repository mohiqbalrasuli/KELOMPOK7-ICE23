<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pesanan_kamar extends Model
{
    protected $table = 'table_pesanan_kamar';
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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }
}
