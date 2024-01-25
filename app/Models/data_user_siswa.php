<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_user_siswa extends Model
{
    use HasFactory;
    protected $table = 'data_user_siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = ['id_akun', 'id_kelas', 'nama', 'instagram', 'linkedin', 'kesan', 'pesan', 'foto_siswa'];
    public $timestamps = false;
}
