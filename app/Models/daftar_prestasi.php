<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_prestasi extends Model
{
    use HasFactory;
    protected $table = 'daftar_prestasi';
    protected $primaryKey = 'id_daftar_prestasi';
    protected $fillable = ['id_ekskul', 'nama_prestasi'];
    public $timestamps = false;
}
