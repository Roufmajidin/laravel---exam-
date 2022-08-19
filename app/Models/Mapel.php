<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    // use HasFactory;
    public function soal()
    {
        return $this->belongsTo(Soal::class, 'mapel_id', 'id');
    }
    public function guru()
    {
        return $this->hasMany(Guru::class, 'mapel_id', 'id');
    }
     public function siswa()
    {
        return $this->belongsToMany(Siswa::class);
    }
     public function siswa_ujian()
    {
        return $this->hasMany(Siswa_ujian::class, 'mapel_id', 'id');
    }
}
