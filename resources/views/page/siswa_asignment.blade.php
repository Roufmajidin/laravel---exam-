@extends('layouts.app')
@section('title', 'Siswa Asignment')
@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
            <h5> Detail Mapell : {{ $mapel->nama_mapel }}</h5>
            {{-- modal add --}}

            <button style="font-size:10px" type="button" class="btn btn-info btn-lg float-right " data-toggle="modal"
                data-target="#myModal">
                Add Assesment</button>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- konten modal-->
                    <div class="modal-content">
                        <!-- heading modal -->
                        <div class="modal-header">
                            {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                            <h6 class="modal-title">Tambah Assesment Untuk: <br> {{ $mapel->nama_mapel }}</h6>
                        </div>
                        <!-- body modal -->
                        <div class="modal-body">
                            {{-- <p>bagian body modal.</p> --}}
                            {{-- isi --}}
                            <form class="form-row" action="/tambahAssesment/{{ $mapel->id }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">
                                        Nama Siswa</label>
                                    <div class="col-sm-12 col-md-7">


                                        <select class="form-control selectric" name="nama_siswa">
                                            @foreach ($siswas as $item)
                                                <option value="{{ $item->nama_siswa }}">{{ $item->nama_siswa }}</option>
                                            @endforeach

                                        </select>


                                    </div>


                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Mapel_id</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            id="mapel_id" name="mapel_id" value="{{ $mapel->id }}" required
                                            autocomplete="">

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
                                            Tambah assignment
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




                {{-- end modal add --}}
                <thead class="">
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Status Ujian</th>
                    </tr>
                </thead>
                <br><br>
                <tbody>
                    @php
                        $no = 1;

                    @endphp

                    @foreach ($siswa as $item)
                        <tr>
                            <td>{{ $no++ }} </td>

                            <td>{{ $item->nama_siswa }}</td>
                            @if ($item->status_ujian == 0)
                                <td>Belum Ujian</td>
                            @elseif($item->status_ujian == 1)
                                <td>Sedang Ujian</td>
                            @else
                                <td>Nilai = {{ $item->status_ujian }}</td>
                            @endif



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
