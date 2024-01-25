<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil_sekolah extends Model
{
    use HasFactory;
    protected $table = 'profil_sekolah';
    protected $primaryKey = 'id_profil';
    protected $fillable = ['tahun_berdiri', 'alamat', 'deskripsi', 'logo_sekolah'];
    public $timestamps = false;
}
