<?php

namespace App\Http\Controllers;

use App\Models\Detail_soal;
use App\Models\Mapel;
use App\Models\Guru;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $mapel = Mapel::find($id);
        // dd($mapel);

        return view('page.soal', compact('soal','mapel'));
    }
    public function detailSoal($id)
    {
        $detailsoal = Detail_soal::where('soal_id', $id)->get();
        $soal = Soal::find($id);
        // dd($soal);

        return view('page.detail_soal', compact('detailsoal', 'soal'));
    }

    public function InsertOpsi()

    {

        Detail_Soal::create(request()->except(['_token']));
        return response()->Json(true);
    }
    // public function getListMasterItem($id)
    // {
    //     // $detailsoal = Detail_soal::where('soal_id', $id)->get();

    //     return Detail_soal::where('soal_id', $id)->get();
    //     // return Detail_soal::all();
    //     // return view('page.detail_soal', compact('detailsoal'));

    // }
    public function tambahOpsi(Request $request, $id)

    {

        Detail_Soal::create(
            [
                'soal_id' => $request->soal_id,
                'opsi' => $request->opsi,



            ]
        );
        return (redirect('detail_soal/' . $id));
    }
    public function tambahSoal(Request $request, $id)

    {

        Soal::create(
            [
                'mapel_id' => $request->mapel_id,
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban,



            ]
        );
        return (redirect('soal/' . $id));
    }
}
