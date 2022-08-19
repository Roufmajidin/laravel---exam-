@extends('layouts.app')
@section('title', 'Mapel')
@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
            <thead class="">
                <tr>
                    <th>No</th>
                    <th>Nama Mapel</th>
                    <th>Guru Pengampu</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <br><br>
            <tbody>
                @php
                    $no = 1;


                @endphp

                @foreach ($mapel as $item)
                    <tr>
                        <td>{{ $no++ }} </td>
                        <td>{{ $item->nama_guru }}
                        <td>{{ $item->mapel['nama_mapel'] }}



                        <td>
                            <a href="/soal/{{ $item->mapel['id'] }}" class="btn btn-sm btn-info" <i class="bi bi-pencil-square"
                                title="Detail Kelas"></i>Detail</a>
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
