<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function contact()
    {
        return $this->hasMany(contact::class,'user_id');
        return $this->hasMany(contact::class,'email_id');
    }
    public function pesanan_kamar()
    {
        return $this->hasMany(pesanan_kamar::class, 'user_id');
    }
    public function pesanan_menu()
    {
        return $this->hasMany(pesanan_menu::class, 'user_id');
    }
    public function user()
    {
        return $this->hasMany(pembayaran_kamar::class,'user_id');
        return $this->hasMany(pembayaran_menu::class,'user_id');
    }
}
