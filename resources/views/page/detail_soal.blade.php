@extends('layouts.app')
@section('title', 'Detail Soal')
@section('content')

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
            <thead class="">
                <Strong>Pertanyaan : </Strong>{{ $soal->pertanyaan }} <br>
                <Strong>Note : </Strong>warna biru adalah jawabannya

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
                                <h6 class="modal-title">Tambah Opsi Untuk: <br> {{ $soal->pertanyaan }}</h6>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">
                                {{-- <p>bagian body modal.</p> --}}
                                {{-- isi --}}
                                <form class="form-row" action="/tambahSoal/{{$soal->id}}/" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Masukkan
                                            Opsi</label>

                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" id="opsi" name="opsi"
                                                value="" required autocomplete="">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Saal ID</label>

                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" id="" name="soal_id"
                                                value="{{ $soal->id }}" required autocomplete="">

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
                                                Tambah Opsi
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




                </div>

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

    <!-- Modal -->

    </div>










@endsection
