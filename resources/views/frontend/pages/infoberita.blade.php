@extends('frontend.include.template')
@section('title','Info Berita')
@section('content')

@include('frontend.include.navbar')

<section class="infoberita" style="margin-top: 100px;">
<<<<<<< HEAD
  @foreach ($berita as $item)
  <div class="container">
    <div class="card my-3 border-0" style="max-width: auto; background-color: #d0d0d0;">
        <div class="row g-0">
          <div class="col-md-2">
            <img width="200px" height="200px" src="{{ asset($item->image) }}" class="img-fluid rounded my-5" alt="...">
          </div>
          <div class="col">
            <div class="card-body my-2">
              <h3 class="card-title fw-bold">{{ $item->name }}</h3>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
              <p class="card-text">{{ mb_strimwidth($item->description, 0, 100, "..."); }}</p>
              <a href="/detailberita/{{ $item->id }}" class="item"><i class="item-primary me-0"></i>Selengkapnya</a>
=======
    <div class="container">
        <div class="card my-3 border-0" style="max-width: auto; background-color: #d0d0d0;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://images.solopos.com/2021/09/Telaga-Menjer-Kabupaten-Wonosobo.jpg" class="img-fluid rounded my-2" alt="...">
              </div>
              <div class="col">
                <div class="card-body my-2">
                  <a class="card-title fw-bold" href="">Card title</a>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad amet at sint eos quo nesciunt odit? Expedita eos tempore repellendus?</p>
                </div>
              </div>
>>>>>>> bc8f166341bad2b07f4530139f00bb6255a8e539
            </div>
          </div>
        </div>
      </div>
  </div>
  @endforeach
    
</section>

@endsection
