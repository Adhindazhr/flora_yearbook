<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sambutan_kepsek extends Model
{
    use HasFactory;
    protected $table = 'sambutan_kepsek';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_kepsek', 'kata_sambutan', 'foto_kepsek'];
    public $timestamps = false;
}
