@extends('layouts.user')
@section('content')
    <h2 class="text-center">Pramuka</h2>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-75 mx-auto rounded" src="img/k.jpg" height="350px" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-75 mx-auto rounded" src="img/komi.jpg" height="350px" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-75 mx-auto rounded" src="img/k.jpg" height="350px" alt="Third slide">

      </div>
    </div>
  </div>
  <div class=" text-center col-md-5">
    <h4>Deskripsi :</h4>
    <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque explicabo molestiae labore voluptatem temporibus. Quasi, id dolorem magni sit, fugiat illo quia voluptatibus impedit nisi doloremque, eligendi aliquid optio voluptates.</h6>
    <br>
    <br>
    <h4>Syarat :</h4>
    <ul>
        <li>Badan Tinggi</li>
        <li>Pintar dan Bertanggung jawab</li>
        <li>Kuat Fisik dan Mental</li>
    </ul>
    <a href="{{ route('daftar') }}" class="btn btn-sm btn-primary">D A F T A R</a>
</div>



@endsection
