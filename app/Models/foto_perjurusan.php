<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto_perjurusan extends Model
{
    use HasFactory;
    protected $table = 'foto_perjurusan';
    protected $primaryKey = 'id_foto';
    protected $fillable = ['foto', 'deskripsi'];
    public $timestamps = false;
}
