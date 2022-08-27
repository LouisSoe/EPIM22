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
                                <h1 class="h4 text-gray-900 mb-4">Request Keluar Ekstrakurikuler</h1>
                            </div>
                            <form action="{{ route('request.store') }}" method="POST" class="user">
                                @csrf
                                <div class="form-group text-center">
                                    Apakah Kamu ingin keluar dari jurusan ?
                                </div>
                                <div class="form-group">
                                    <textarea name="alasan" class="form-control " placeholder="Alasan" style="resize: none"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="user_id" value="{{ Auth::user()->id }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="eskul_id" value="{{ $cek->eskul_id }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="daftar_id" value="{{ $cek->id }}">
                                </div>
                                @if ($cek)
                                    <button class="btn btn-info btn-user btn-block">KIRIM</button>
                                @else
                                    <button class="btn btn-warning btn-user btn-block disabled" disabled>KIRIM</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
