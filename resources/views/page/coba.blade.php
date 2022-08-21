@extends('layouts.app')
@section('title', 'Coba Parsing Data')
@section('content')



    <div class="main-panel">

        <div class="card-body">
            <h4 class="card-title">Ujian Online {{ $mapel->nama_mapel }}</h4>


            </p>
             @php
                    $no = 1;
                @endphp
                @foreach ($soal as $item)
            <form class="forms-sample">

                    <div class="form-group mb-4">
                        <label for="exampleInputName1"><strong>Pertanyaan {{ $no++ }} </strong></label>
                        <input type="text" class="form-control mb-3" id="exampleInputName1" placeholder="Name"
                            value="{{ $item->pertanyaan }}" disabled>
                    </div>
                    <form class="form-row" action="/formExam/{{ $item->id }}" method="POST">

                        <div class="row">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="opsi" id="optionsRadios1"
                                            value="">
                                        {{ $item->opsi_a }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="opsi" id="optionsRadios2"
                                            value="option2">
                                        {{ $item->opsi_b }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="opsi" id="optionsRadios3"
                                            value="option3">
                                        {{ $item->opsi_c }}
                                    </label>
                                </div>
                            </div>

                        </div>

                    </form>
                @endforeach


                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    {{-- {{links()}} --}}







@endsection
