  @extends('layouts.app')
  @section('title', 'Mapel U Siswa')
  @section('content')
      <h5>Mapel Ujianmu </h5>


      <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          @foreach ($mapell as $item)
              <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                          <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                      {{ $item->mapel['nama_mapel'] }} </div>
                                  @if ($item->status_ujian == 0)
                                      <a href="/start_ujian/{{$item->id}}" style="color:red" class="h6 mb-0 font-weight-bold"
                                          data-toggle="modal" data-target="#myModal">Belum Ujian</a>
                                           {{-- modal dialog --}}

       <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <!-- konten modal-->
                        <div class="modal-content">
                            <!-- heading modal -->
                            <div class="modal-header">
                                {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                                <h6 class="modal-title">Apakah Yakin akan memulai Ujian ? <br> </h6>
                            </div>
                            <!-- body modal -->
                            <div class="modal-body">
                                {{-- isi --}}
                                <form class="form-row" action="/jawabanStartUjian/{{$item->id}}" method="POST">
                                    {{ csrf_field() }}


                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">jawaban Anda</label>

                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" id="" name="jawaban"
                                                value="1" required autocomplete="" placeholder="ya">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                      <label for="email" class="col-md-4 col-form-label text-md-end">mapel Anda</label>

                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" id="" name="mapel_id"
                                                value="{{$item->mapel_id}}" required autocomplete="" placeholder="">

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
                    </div>



      {{--  --}}

                                  @elseif($item->status_ujian == 1)
                                      <a href="" style="color:orange" class="h6 mb-0 font-weight-bold">Sedang
                                          Ujian</a>
                                  @elseif($item->status_ujian > 2)
                                      <a href="sd/{{$item->id}}" style="color:success"
                                          class="h6 mb-0 font-weight-bold">{{ $item->status_ujian }}</a>
                                  @endif
                              </div>
                              <div class="col-auto">
                                  <i class="fas fa-calendar fa-2x text-gray-300"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach

          <!-- Earnings (Annual) Card Example -->
          {{-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
      </div>
  @endsection
