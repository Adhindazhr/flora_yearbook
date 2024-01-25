<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_user_guru extends Model
{
    use HasFactory;
    protected $table = 'data_user_guru';
    protected $primaryKey = 'id_guru';
    protected $fillable = ['id_akun', 'nama', 'jabatan', 'foto_guru'];
    public $timestamps = false;
}
