<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembayaran_menu extends Model
{
    protected $table = 'table_pembayaran_menu';
    protected $fillable = [
        'user_id',
        'metode_pembayaran_id',
        'total_harga',
        'tanggal_bayar',
        'bukti_pembayaran',
    ];

    public function metode_pembayaran()
    {
        return $this->belongsTo(metode_pembayaran::class,'metode_pembayaran_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
