@extends('layouts.app')
@section('title', 'Soal Mapel')
@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">

            <button style="font-size:10px" type="button" class="btn btn-info btn-lg float-right " data-toggle="modal"
                    data-target="#myModal">
                    Add Opsi</button>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content">
                            <!-- heading modal -->
                            <div class="modal-header">
                                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                                <h6 class="modal-title">Tambah Opsi Untuk Mapel : <br> {{ $mapel->nama_mapel }}</h6>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">
                                {{-- <p>bagian body modal.</p> --}}
                                {{-- isi --}}
                                <form class="form-row" action="/tambahSoal/{{$mapel->id}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Pertanyaan</label>

                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" name="pertanyaan"
                                                value="" required autocomplete="">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Mapel ID</label>

                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" id="opsi" name="mapel_id"
                                                value="{{$mapel->id}}" required autocomplete="">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">jawaban</label>

                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" id="" name="jawaban"
                                                value="" required autocomplete="">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>




                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Sumbit
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                {{-- end sis --}}
                            </div>
                            <!-- footer modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
                            </div>
                        </div>
                    </div>

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
