@extends('layouts.user')
@section('content')

<br>
<div class="text-center">
    <img class="text-center mb-4" src="img/5.jpg" width="150px">
</div>
    <h3 class="text-center" style="color:black;" ><b>EKSTRAKURIKULER</b></h3>
    <br>
    @foreach ($eskul as $ekstra)
    @if ($ekstra->id % 2 == 1)

    <a class="col-lg-12 col-md-6 mb-4 text-decoration-none" href="{{ route('detail', $ekstra->id) }}">
        <div class="bg-warning shadow rounded h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto ml-5 mr-5">
                        <img src="storage/{{ $ekstra->cover }}" class="rounded" width="300px" height="200px" alt="">
                    </div>
                    <div class="col mr-2">
                        <h3 class="text-sm font-weight-bold text-black text-uppercase mb-3">{{ $ekstra->nama_eskul }}</h3>
                        <div class="mb-0 mr-5 text-gray-800 col-md-8">{{ $ekstra->deskripsi }}</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @else

    <a class="col-lg-12 col-md-6 mb-4 text-decoration-none" href="{{ route('detail', $ekstra->id) }}">
        <div class="rounded h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-auto ml-5 mr-5">
                        <img src="storage/{{ $ekstra->cover }}" class="rounded" width="300px" height="200px" alt="">
                    </div>
                    <div class="col mr-2">
                        <h4 class="text-sm font-weight-bold text-black text-uppercase mb-3">{{ $ekstra->nama_eskul }}</h4>
                        <div class="mb-0 mr-5 text-gray-800 col-md-8">{{ $ekstra->deskripsi }}</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endif

    @endforeach
@endsection
