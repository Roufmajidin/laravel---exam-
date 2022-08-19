<?php

namespace App\Http\Controllers;

use App\Models\Detail_soal;
use App\Models\Mapel;
use App\Models\Guru;
use App\Models\Soal;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    //
     public function allMapel()
    {
        $mapel = Guru::all();
        return view('page.mapel', compact('mapel'));
    }
     public function detailMapel($id)
    {
        $soal = Soal::with('detail_soal')->where('mapel_id', $id)->get();
        // dd($soal);

        return view('page.soal', compact('soal'));
    }
     public function detailSoal($id)
    {
        $detailsoal = Detail_soal::where('soal_id', $id)->get();
        $soal = Soal::find($id);
        // dd($soal);

        return view('page.detail_soal', compact('detailsoal', 'soal'));
    }
}
