<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto_perkelas extends Model
{
    use HasFactory;
    protected $table = 'foto_perkelas';
    protected $primaryKey = 'id_foto';
    protected $fillable = ['id_kelas', 'foto_perkelas'];
    public $timestamps = false;
}
