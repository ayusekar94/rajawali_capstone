@extends('frontend.include.template')
@section('title','Homepage')
@section('content')

@include('frontend.include.navbar')
<section class="homepage1" style="margin-top: 50px">
    <div>
        <div class="bg-img">
          <div class="container text-center">
            <h1 class="hero-header margin-bottom-md">Find Your Trip</h1>
            <p class="hero-subheader margin-top-xsm">Selamat Datang, Destinasi Wisata Alam Wonosobo!</p>
            <div class="container-searchbar">
                <form action="" class="searchbar">
                    <input type="text" name="searchbar" id="searchbar" placeholder="Discover More!">
                    <button type="submit"> <img src={{ asset('assets/frontend/css/images/search.png') }} alt=""></button>
                </form>
            </div>
          </div>
        </div>
        <div style="height:40px;"></div>
</section>
<section class="homepage2">
    <div class="full-width">
        <div class="container text-center padding-top-xlg">
          <div class="row margin-top-xlg margin-bottom-xlg">
            <h2 class="text-center margin-bottom-lg fw-bold">About Me</h2>
            <div class="col-6">
              <div class="col-15">
                <img class="img-responsive center-block" src={{ asset('assets/frontend/css/images/BukitSeroja.jpg') }}>
              </div>
            </div>
            <div class="col-6 text-left pull-right">
              <div class="col-15">
                <p class="section text-grey margin-top-none margin-bottom-none">Wisata alam di Kabupaten Wonosobo ini banyak memiliki kawasan alam yang sangat menarik untuk disinggahi, dan wisata alam ini pun dapat dikembangkan dan dimanfaatkan sebesar-besarnya bagi kesejahteraan rakyat dengan tetap memperhatikan upaya konservasi. </p>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
{{-- <section class="homepage3">
    <div class="container">
        @foreach ($category as $item)
        <div class="row">
                <div class="text-center">
                    <a href="#" class="button">{{ $item->name }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section> --}}
<section class="homepage4">
    <div class="container">
        <div class="row my-5">
            <h2 class="text-center margin-bottom-lg fw-bold">Rekomendasi Wisata</h2>
            @foreach ($wisata as $item)
                <div class="col-4">
                    <div class="card border-0" style="width: 18rem;">
                        <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded" alt="...">
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            {{-- <a href="/bookingtiket" class="btn btn-primary btn-sm" >Pesan Tiket</a><br> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="homepage5">
    <div class="full-width">
        <div class="container text-center">
            <div class="row margin-bottom-xlg">
                <h2 class="text-center margin-bottom-lg fw-bold">Title</h2>
                <img class="img-responsive center-block" src={{ asset('assets/frontend/css/images/test.jpg') }}>
            </div>
        </div>
    </div>
</section>
<section class="homepage6">
    <div class="full-width">
        <div class="container text-center">
            <div class="row margin-bottom-xlg">
                <h2 class="text-center margin-bottom-lg fw-bold">Testimoni</h2>
                <div class="col d-flex justify-content-center">
                    <div class="box bg-body-secondary">
                        <img class="" src="https://www.its.ac.id/aktuaria/wp-content/uploads/sites/100/2018/03/user.png">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolore vitae cupiditate.</p>
                    </div>
                    <div class="box bg-body-secondary">
                        <img class="" src="https://www.its.ac.id/aktuaria/wp-content/uploads/sites/100/2018/03/user.png">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolore vitae cupiditate.</p>
                    </div>
                    <div class="box bg-body-secondary">
                        <img class="" src="https://www.its.ac.id/aktuaria/wp-content/uploads/sites/100/2018/03/user.png">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolore vitae cupiditate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
