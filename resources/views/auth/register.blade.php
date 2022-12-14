@extends('layouts.guest')
@section('guest')
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
                                <h1 class="h4 text-gray-900 mb-4">R E G I S T E R</h1>
                            </div>
                            <form action="{{ route('register') }}" method="POST" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="name" name="name" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="name" name="prodi" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Prodi">
                                </div>
                                <div class="form-group">
                                    <input type="name" name="no_hp" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="no hp">
                                </div>
                                <div class="form-group">
                                    <input type="name" name="nim" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Nomer Induk Mahasiswa">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation"
                                        class="form-control form-control-user" id="exampleInputPassword"
                                        placeholder="Password Confirmation">
                                </div>
                                <button type="submit" class="btn btn-warning btn-user btn-block">register</button>
                            </form>
                                   <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Have a account?</a>
                                    </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
