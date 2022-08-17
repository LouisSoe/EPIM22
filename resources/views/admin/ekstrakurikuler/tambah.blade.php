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
                                        <h1 class="h3 text-gray-900 mb-4">T A M B A H</h1>
                                    </div>
                                    <form action="{{ route('ekstrakurikuler.store') }}" method="POST" class="user" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="nama_eskul" class="form-control form-control-user"
                                             aria-describedby="emailHelp"
                                                placeholder="Nama Ekstrakurikuler">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="deskripsi" class="form-control form-control-user"
                                                 placeholder="Deskripsi">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" >
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
