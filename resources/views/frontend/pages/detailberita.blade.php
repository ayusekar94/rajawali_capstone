@extends('frontend.include.template')
@section('title','Detail Berita')
@section('content')

@include('frontend.include.navbar')

<section class="detailberita">
    <div class="container">
        <div class="card my-3 border-0" style="background-color: #cdcdcd">
            <div class="card-body">
                <h2 class="card-title fw-bold text-center my-3">Title</h2>
                <img src="https://cdn-2.tstatic.net/banyumas/foto/bank/images/wisatawan-menikmati-kuliner-di-kampung-sikunir-kabupaten-wonosobo-minggu-2692021.jpg" class="card-img my-2 img-fluid mx-auto width-fit" alt="...">
                <p class="card-text mt-1"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                <p class="card-text mx-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore autem cumque libero natus qui obcaecati! Nam veniam eum nisi magnam rerum exercitationem numquam nostrum, dicta nemo eos, magni ea ratione.</p>


            </div>
          </div>
    </div>
</section>

@endsection
