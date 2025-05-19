<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table = 'kamar';
    protected $fillable = [
        'nomor_kamar',
        'kategori_kamar_id',
        'lantai',
        'status',
    ];
}
