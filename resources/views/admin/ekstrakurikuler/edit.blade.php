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
                                        <h1 class="h3 text-gray-900 mb-4">L O G I N</h1>
                                    </div>
                                    <form action="{{ route('ekstrakurikuler.update', $ekstrakurikuler->id ) }}" method="POST" class="user" >
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <input type="text" name="nama_eskul" class="form-control form-control-user"
                                             aria-describedby="emailHelp" value="{{ $ekstrakurikuler->nama_eskul }}"
                                                placeholder="Nama Ekstrakurikuler">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="deskripsi" class="form-control form-control-user"
                                                 placeholder="Deskripsi" value="{{ $ekstrakurikuler->deskripsi }}">
                                        </div>
                                        {{-- <div class="form-group">
                                            <input type="file" name="image" >
                                        </div> --}}
                                        <button class="btn btn-primary btn-user btn-block">Simpan</button>
                                    </form>

                                </div>
                        </div>
                    </div>
            </div>

        </div>

    </div>
@endsection
