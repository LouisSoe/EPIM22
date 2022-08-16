@extends('layouts.form')
@section('content')
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card o-hidden rounded border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">P E N D A F T A R A N</h1>
                                    </div>
                                    <form action="{{ route('daftar.update') }}" method="POST" class="user" >
                                        @csrf
                                        @method('PUT');
                                        <div class="form-group">
                                            <input type="text" name="ekstrakurikuler_id" disabled value="{{$ekstras->id}}" class="form-control form-control-user"  placeholder="{{$ekstras->name}}">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nama" class="form-control form-control-user" value="asdasd" placeholder="Nama Lengkap" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nim" class="form-control form-control-user" placeholder="Nomer Induk Mahasiswa" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="prodi" class="form-control form-control-user" placeholder="Prodi" disabled>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="no_hp" class="form-control form-control-user" placeholder="No HP" disabled>
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block">Simpan</button>
                                    </form>

                                </div>
                        </div>
                    </div>
            </div>

        </div>

    </div>
@endsection
