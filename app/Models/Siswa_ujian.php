<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa_ujian extends Model
{
    use HasFactory;

    protected $table = 'siswa_ujian';
    protected $fillable = [
        'nama_siswa',
        'mapel_id',
        'status_ujian',
    ];
      public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
