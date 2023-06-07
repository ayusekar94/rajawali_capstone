@extends('frontend.include.template')
@section('title','Search Wisata')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@600&display=swap" rel="stylesheet">

<!-- @include('frontend.include.navbar') -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid mx-lg-5">
        <img src="{{ asset('assets/frontend/css/images/RawalaText.png') }}" alt="Logo" width="100" class="d-inline-block align-text-top" href="#">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link text-white {{ request()->is('/') ? ' active-link' : '' }}">
                  <span>Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/infoBerita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/lwisata">Wisata</a>
            </li>
            <li class="nav-item dropdown" {{ session('isLogin')?"":"style=display:none" }}>
            <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, {{ session('name') }}
            </a>
            @if ( session('role')== "user" ? "" : "style=display:none" )
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard">Dashbord</a></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
            @else
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <?php
                  $cart_utama = \App\Models\Cart::where('user_id', session('id'))->where('status',0)->first();
                  if(!empty($cart_utama))
                  {
                    $notif = \App\Models\Transaksi::where('cart_id', $cart_utama->id)->count();
                  }
                ?>
                <a class="dropdown-item" href="{{ url('check-out') }}">
                    Keranjang
                    @if(!empty($notif))
                      <span class="badge badge-danger">{{ $notif }}</span>
                    @endif
                </a>
              </li>
              <li><a class="dropdown-item" href="/profile">Profile</a></li>
              <li><a class="dropdown-item" href="/history">Riwayat</a></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
            @endif
          </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-2 mt-5"> 

        <h4>Search Result</h4>
        <hr>
        </div>
        
        @forelse ($searchWisata as $a)
        
            <div class="col-md-3 mt-5">
                <div class="card">
                    <img width="200px" height="200px" src="{{ asset('assets/frontend/css/images/Sinsu.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $a->name }}</h5>
                    <p class="card-text">
                        {{ $a->description }} <br>
                        <strong>Harga : </strong> Rp. {{ number_format($a->price) }} <br>
                        {{-- <strong>Stok :</strong> {{ $a->stok }} <br> --}}
                    </p>
                    <a href="/detail/{{ $a->id }}" class="btn btn-primary">Pesan Tiket</a>
                    </div>
                </div>
            </div>
            @empty
                  <div class="col-md-3 mt-5"></div>
                  <center><h3 style="font-family: 'Signika Negative', sans-serif;">404</h3></center>
                  <center><h4 style="font-family: 'Inconsolata', monospace;">OOPS!|Wisata tidak ditemukan</h4></center>
        @endforelse
                  <!-- <div class="col-md-3 mt-5"> 
                    {{ $searchWisata->appends(request()->input())->links() }}
                  </div> -->
    </div>
</div>
{{-- <section class="homepage4">
    <div class="container">
        <div class="row my-5">
            <h2 class="text-center margin-bottom-lg fw-bold">Rekomendasi Wisata</h2>
            @forelse ($searchWisata as $item)
                <div class="col-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="/bookingtiket" class="btn btn-primary btn-sm" >Pesan Tiket</a><br>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section> --}}
@endsection