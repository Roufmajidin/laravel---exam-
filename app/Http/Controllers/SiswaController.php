<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Siswa_ujian;
use App\Models\Mapel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function siswaMapel()
    {
        //SISWA
        $i = 2;
        $siswa = Siswa::where('id', $i)->get('id');
        $mapel = Siswa_ujian::find($siswa);
        // dd($mapel);
        //


        $m = Mapel::with('siswa_ujian')->find($i);
        $mapell = Siswa_ujian::with('mapel')->where('nama_siswa', 'Sasqia Alfi')->get();

        // dd($mapell->count());

        return view('page.siswa.mapel_u', compact('mapell'));
    }
    public function jawabanStartUjian(Request $request, $id)

    {
        $m = $request->mapel_id;
        // $mapell = Siswa_ujian::with('mapel')->where('id', $id)->get();
        // $ubah = 1;
        // $m = Siswa_ujian::with('mapel')->where('mapel_id', $request->mapel_id)->get();

        Siswa_ujian::find($id)->update([
            'status_ujian' => $request->jawaban

        ]);
        // dd($mapell);

        return (redirect('soal/'. $m));
    }
     public function formExam(Request $request, $id)

    {
        // $m = Mapel::with('siswa_ujian')->find($i);
        // $mapell = Siswa_ujian::with('mapel')->where('id', $id)->get();
        // $ubah = 1;
        $m = Siswa_ujian::with('mapel')->where('mapel_id', $id)->get('mapel_id');

        Siswa_ujian::find($id)->update([
            'status_ujian' => $request->jawaban

        ]);
        // dd($mapell);

        return (redirect('soal/'.$m));
    }
}
