<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class metode_pembayaran extends Model
{
    protected $table = 'table_metode_pembayaran';
    protected $fillable = [
        'nama_bank',
        'no_rekening',
    ];
}
