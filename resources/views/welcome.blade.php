@extends('layouts.app')
@section('title', 'Viajes')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.pixabay.com/photo/2016/12/11/23/26/london-1900570_960_720.jpg" class="d-block w-100 " alt="Big Bang">
      <div class="carousel-caption d-none d-md-block">
        <h5>Big Bang</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F28%2F2017%2F02%2Feiffel-tower-paris-france-EIFFEL0217.jpg&q=85" class="d-block w-100" alt="Eiffel Tower">
      <div class="carousel-caption d-none d-md-block">
        <h5>Eiffel Tower</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images2.alphacoders.com/920/920811.jpg" class="d-block w-100" alt="Statue of Liberty">
      <div class="carousel-caption d-none d-md-block">
        <h5>Statue of Liberty</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection