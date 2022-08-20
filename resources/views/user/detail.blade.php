@extends('layouts.user')
@section('content')

<a class="btn rounded-circle btn-success" type="button" href="{{ route('homepage') }}"><i class="fas fa-arrow-left"></i></a>
    <h2 class="text-center text-black mb-4">{{ $eskul->nama_eskul }}</h2>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        @php
                      $image = DB::table('eskul_images')->where('id',$eskul->id)->first();
                      $images = explode('|', $image->image);
                  @endphp
                              {{-- @dd($image) --}}

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-40 mx-auto rounded" src="{{url('storage/'.$eskul->cover) }}" height="350px" alt="First slide">
            </div>
                           @foreach($images as $i)

            <div class="carousel-item">
                <img class="d-block w-40 mx-auto rounded" src="{{ URL::to($i) }}" height="350px"
                    alt="Second slide">
            </div>
            @endforeach
        </div>
    </div>
    <br>
    <br>
    <div class="col">
        
        <div class="text-center mx-auto col-md-5">
            <h4>Deskripsi :</h4>
            <h6>{{ $eskul->deskripsi }}</h6>
            
            <br>
            <br>
            <a href="{{ route('Pendaftaran.edit',$eskul->id) }}" class="btn btn-md btn-warning mb-5 ">Daftar</a>
        </div>
    </div>
    </div>
  </div>
  </div>


@endsection
