<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pesanan_menu extends Model
{
    protected $table = 'table_pesanan_menu';
    protected $fillable = [
        'user_id',
        'menu_id',
        'jumlah',
        'total_harga',
        'kursi',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function menu()
    {
        return $this->belongsTo(menu::class, 'menu_id');
    }
}
