@extends('frontend.include.template')
@section('title','Search Wisata')
@section('content')

@include('frontend.include.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-2 mt-5"> 
        <h4>Search Result</h4>
        <div class="underline mb-4"></div>
        </div>
        @foreach ($searchWisata as $a)
        
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
        @endforeach
    </div>
</div>
{{-- <section class="homepage4">
    <div class="container">
        <div class="row my-5">
            <h2 class="text-center margin-bottom-lg fw-bold">Rekomendasi Wisata</h2>
            @foreach ($searchWisata as $item)
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
            @endforeach
        </div>
    </div>
</section> --}}
@endsection