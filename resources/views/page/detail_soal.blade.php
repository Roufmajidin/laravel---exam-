@extends('layouts.app')
@section('title', 'Detail Soal')
@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
            <thead class="">
                <Strong>Pertanyaan : </Strong>{{ $soal->pertanyaan }} <br>
                <Strong>Note : </Strong>warna biru adalah jawabannya

                <tr>
                    <th>Opsi</th>
                    <th>Isian</th>

                </tr>
            </thead>
            <br><br>
            <tbody>





                @php
                    $no = 'A';
                    $p = App\Models\Soal::get('jawaban');

                @endphp

                @foreach ($detailsoal as $item)


                <tr>
                    <td align="center">{{ $no++ }} </td>
                    @if ($item->opsi === $soal->jawaban)
                        <td class="btn-sm btn-primary">{{ $item->opsi }}
                        @else
                        <td class="">{{ $item->opsi }}

                         @endif

                            {{-- <td>
                            <a href="/detail_soal/{{ $item->id }}" class="btn btn-sm btn-info" <i
                                class="bi bi-pencil-square" title="Detail Kelas"></i>Detail</a>
                        </td> --}}
                </tr>



                </tr>
                @endforeach




            </tbody>

        </table>


    </div>

    </div>

    </div>
    </div>








@endsection
