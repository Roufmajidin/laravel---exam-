<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    // use HasFactory;
      protected $fillable = [
        'mapel_id',
        'jawaban',
        'pertanyaan',
        'opsi_a',
        'opsi_b',
        'opsi_c',



    ];
     public function detail_soal()
    {
    return $this->hasMany(Detail_soal::class, 'soal_id', 'id');


    }
}
