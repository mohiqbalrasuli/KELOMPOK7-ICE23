<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table ='table_pesan';
    protected $fillable =[
        'name',
        'email',
        'subjek',
        'pesan',
        'waktu',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function email()
    {
        return $this->belongsTo(User::class, 'email_id');
    }
}
