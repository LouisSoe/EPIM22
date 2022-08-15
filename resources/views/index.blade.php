@extends('layouts.user')
@section('content')
    <h1 class="text-center"> EKSTRAKULIKULER</h1>
    <br>
      <div class="row">
        @for ($i = 0; $i < sizeof($eskul); $i++)

        <a class="col-lg-6 col-md-6 mb-4 text-decoration-none" href="">
            <div class="card border-left-danger h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto mr-4">
                            <img src="img/k.jpg" class="rounded" width="200px" height="200px" alt="">
                        </div>
                        <div class="col mr-2">
                            <h4 class="text-sm font-weight-bold text-danger text-uppercase mb-1">
                                Pramuka</h4>
                            <div class="mb-0 text-gray-800">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit neque numquam, reprehenderit eius explicabo eveniet at. Modi placeat veritatis aperiam.</div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endfor


</div>
@endsection
