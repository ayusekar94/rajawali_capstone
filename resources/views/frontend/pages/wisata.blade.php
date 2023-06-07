@extends('frontend.include.template')
@section('title','List Wisata')
@section('content')

@include('frontend.include.navbar')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-2 mt-5">
        </div>
        <div class="col-md-10 mr-5 mt-5">
            <form action="" method="GET" class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control" value="{{ Request::get('search') }}" name="query" placeholder="Cari...">
                </div>
                <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
            </form>
        </div>
        @foreach ($wisata as $a)
            <div class="col-md-3 mt-2">
                <div class="card">
                    <img width="200px" height="200px" src="{{ asset($a->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $a->name }}</h5>
                    <p class="card-text">
                        {{ mb_strimwidth($a->description, 0, 40, "..."); }}<br>
                    </p>
                    <a href="/detailwisata/{{ $a->id }}" class="item"><i class="item-primary me-0"></i>Selengkapnya</a>
                    {{-- <a href="/detail/{{ $a->id }}" class="btn btn-primary">Pesan Tiket</a> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection