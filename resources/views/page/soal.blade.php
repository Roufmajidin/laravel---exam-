@extends('layouts.app')
@section('title', 'Soal Mapel')
@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
            <thead class="">
                <tr>
                    <th>No</th>
                    <th>Pertanyaan Soal</th>
                    <th>Jawaban</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <br><br>
            <tbody>





                @php
                    $no = 1;

                @endphp

                @foreach ($soal as $item)

                    <tr>
                        <td>{{ $no++ }} </td>
                        {{-- <td>{{ $item->nama_mapel }} --}}
                        <td>{{ $item->pertanyaan }}
                        <td>{{ $item->jawaban }}

                            {{-- <td>{{ $item->detail_soal['opsi']}} --}}



                        <td>
                            <a href="/detail_soal/{{ $item->id }}" class="btn btn-sm btn-info" <i
                                class="bi bi-pencil-square" title="Detail Kelas"></i>Detail</a>
                        </td>
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
