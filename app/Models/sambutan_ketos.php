<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sambutan_ketos extends Model
{
    use HasFactory;
    protected $table = 'sambutan_ketos';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_ketos', 'kata_sambutan', 'foto_ketos'];
    public $timestamps = false;
}
