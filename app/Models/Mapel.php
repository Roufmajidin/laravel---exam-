<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    // use HasFactory;
    public function soal()
    {
    return $this->hasMany(Soal::class, 'mapel_id', 'id');


    }
}
