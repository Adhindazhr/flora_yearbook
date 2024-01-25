<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sambutan_ketua_bts extends Model
{
    use HasFactory;
    protected $table = 'sambutan_ketua_bts';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_ketua_bts', 'kata_sambutan', 'foto_ketua_bts'];
    public $timestamps = false;
}
