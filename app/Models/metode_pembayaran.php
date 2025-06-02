<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class metode_pembayaran extends Model
{
    protected $table = 'table_metode_pembayaran';
    protected $fillable = [
        'nama_bank',
        'atas_nama',
        'nomor_rekening',

    ];

    public function metode_pembayaran()
    {
        return $this->hasMany(pembayaran_kamar::class,'metode_pembayaran_id');
        return $this->hasMany(pembayaran_menu::class,'metode_pembayaran_id');
    }
}
