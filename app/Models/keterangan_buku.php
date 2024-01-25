<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keterangan_buku extends Model
{
    use HasFactory;
    protected $table = 'keterangan_buku';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_sekolah', 'angkatan', 'foto_sekolah'];
    public $timestamps = false;
}
