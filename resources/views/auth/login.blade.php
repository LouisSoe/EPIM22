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
                                        <h1 class="h3 text-gray-900 mb-4">L O G I N</h1>
                                    </div>
                                    <form action="{{ route('login') }}" method="POST" class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email"  name="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                                @error('email')

                                                <div class="invalid-feedback">
            
                                                    {{$message}}
            
                                                </div>
            
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password"  name="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                id="exampleInputPassword" placeholder="Password">
                                                @error('password')

                                                <div class="invalid-feedback">
            
                                                    {{$message}}
            
                                                </div>
            
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            
                                        </div>
                                        
                                        <button class="btn btn-warning btn-user btn-block">login</button>
                                    </form>
                                    
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>

        </div>

    </div>
@endsection
