<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    protected $table = 'table_kamar';
    protected $fillable = [
        'nomer_kamar',
        'kategori_kamar_id',
        'lantai',
        'status',
    ];

    public function kategori_kamar()
    {
        return $this->belongsTo(kategori_kamar::class, 'kategori_kamar_id');
    }
}
