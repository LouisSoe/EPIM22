@extends('layouts.form')
@section('content')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden rounded border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <img class="mb-3" src="{{ asset('img/5.jpg') }}" width="80px">
                                <h1 class="h3 text-gray-900 mb-4">P E N D A F T A R A N</h1>
                            </div>
                            <form action="{{ route('Pendaftaran.update',$data->id) }}" method="POST" class="user">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                        value="{{ $data->nama_eskul }}" disabled placeholder="Nama Lengkap">
                                        <input type="text" name="ekstrakurikulers_id" value="{{ $data->id }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user"
                                        value="{{ Auth::user()->name }}" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nim" class="form-control form-control-user"
                                        value="{{ Auth::user()->nim }}" placeholder="Nomer Induk Mahasiswa">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="prodi" class="form-control form-control-user"
                                        value="{{ Auth::user()->prodi }}" placeholder="Prodi">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_hp" class="form-control form-control-user"
                                        value="{{ Auth::user()->no_hp }}" placeholder="No HP">
                                </div>

                                <button class="btn btn-warning btn-user btn-block">Simpan</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
