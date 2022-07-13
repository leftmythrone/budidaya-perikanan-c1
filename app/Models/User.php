<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    public function levels()
    {
        return $this->belongsTo(\App\Models\Role::class, 'role_id');
    }

    public function history()
    {
        return $this->belongsTo(\App\Models\User::class, 'history_user_id');
    }


    protected $fillable = [
        'nama_depan_pengguna',
        'nama_belakang_pengguna',
        'username',
        'nomor_pengguna',
        'alamat_pengguna',
        'password',
        'slug_pengguna',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
}
