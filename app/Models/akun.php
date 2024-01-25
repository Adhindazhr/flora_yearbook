<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class akun extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'akun';
    protected $primaryKey = 'id_akun';
    protected $casts = [
        'password' => 'hashed',
    ];
    protected $fillable = ['username', 'password', 'role'];
    public $timestamps = false;
}
