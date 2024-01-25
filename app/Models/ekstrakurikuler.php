<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstrakurikuler extends Model
{
    use HasFactory;
    protected $table = 'ekstrakurikuler';
    protected $primaryKey = 'id_ekskul';
    protected $fillable = ['nama_ekskul', 'slogan', 'sejarah', 'foto'];
    public $timestamps = false;
}
