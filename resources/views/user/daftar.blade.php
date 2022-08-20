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
                            <form action="{{ route('Pendaftaran.store') }}" method="POST" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" disabled value="{{ $data->nama_eskul }}">
                                    <input type="hidden" name="eskul_id" value="{{ $data->id }}">
                                
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" disabled value="{{ Auth::user()->name }}">
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" name="setuju">
                                    Saya Terima Dengan Pilihan Saya
                                </div>


                                <button class="btn btn-warning btn-user btn-block">KIRIM</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
