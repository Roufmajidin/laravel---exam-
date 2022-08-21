<?php

namespace App\Http\Controllers;

use App\Models\Detail_soal;
use App\Models\Mapel;
use App\Models\Guru;
use App\Models\Soal;
use App\Models\Siswa;
use App\Models\Siswa_ujian;
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
        $detail_soal = Detail_soal::where('soal_id', $id)->get();
        // dd($soal);
        $mapel = Mapel::find($id);
        // dd($soal);

        return view('page.coba', compact('detail_soal','soal', 'mapel'));
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
     public function asignSiswa($id)
    {
        $siswa = Siswa_ujian::where('mapel_id', $id)->get();
        $mapel = Mapel::find($id);
        $siswas = Siswa::get();

        // dd($sis  wa);


        return view('page.siswa_asignment', compact('siswa', 'mapel', 'siswas'));
    }
     public function asignSiswaPost(Request $request, $id)

    {

        Siswa_ujian::create(
            [
                'nama_siswa' => $request->nama_siswa,
                'mapel_id' => $request->mapel_id,
            ]
        );
        return (redirect('siswa_asigment/' . $id));
    }
}
