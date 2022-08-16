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
                                    <img class="mb-3" src="img/5.jpg" width="80px">
                                        <h1 class="h3 text-gray-900 mb-4">P E N D A F T A R A N</h1>
                                    </div>
                                    <form action="{{ route('daftar.store') }}" method="POST" class="user" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user"  placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nim" class="form-control form-control-user" placeholder="Nomer Induk Mahasiswa">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="prodi" class="form-control form-control-user" placeholder="Prodi">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="no_hp" class="form-control form-control-user" placeholder="No HP">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="alasan" class="form-control form-control-user" placeholder="Alasan">
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
