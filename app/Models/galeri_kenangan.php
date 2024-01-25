<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeri_kenangan extends Model
{
    use HasFactory;
    protected $table = 'galeri_kenangan';
    protected $primaryKey = 'id_foto';
    protected $fillable = ['id_kelas', 'foto', 'deskripsi'];
    public $timestamps = false;
}
