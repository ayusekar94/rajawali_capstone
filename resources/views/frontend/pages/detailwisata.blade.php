@extends('frontend.include.template')
@section('title','Detail Berita')
@section('content')

@include('frontend.include.navbar')

<section class="detailwisata">
    <div class="container" style="margin-top: 105px;margin-bottom: 20px;">
        <div class="card border-0" style="background-color: #cdcdcd;">
            <div class="card-body p-lg-4">
                <h2 class="card-title fw-bold mb-2">Title</h2>
                <h6>Rate</h6>
                <div class="row ms-3">
                    <div class="col-9 m-0 p-0">
                        <img class="card-img my-2 img-fluid mx-auto width-fit" src="https://cdn-2.tstatic.net/banyumas/foto/bank/images/wisatawan-menikmati-kuliner-di-kampung-sikunir-kabupaten-wonosobo-minggu-2692021.jpg" alt="">
                    </div>
                    <div class="col-3 my-3 ms-4 p-0 ">
                        <div class="row m-0 ">
                            <img class="card-img mb-3 img-fluid mx-auto width-fit rounded" src="https://cdn-2.tstatic.net/banyumas/foto/bank/images/wisatawan-menikmati-kuliner-di-kampung-sikunir-kabupaten-wonosobo-minggu-2692021.jpg" alt="">
                        </div>
                        <div class="row m-0">
                            <img class="card-img mb-3 img-fluid mx-auto width-fit" src="https://cdn-2.tstatic.net/banyumas/foto/bank/images/wisatawan-menikmati-kuliner-di-kampung-sikunir-kabupaten-wonosobo-minggu-2692021.jpg" alt="">
                        </div>
                        <div class="row m-0">
                            <img class="card-img img-fluid mx-auto width-fit" src="https://cdn-2.tstatic.net/banyumas/foto/bank/images/wisatawan-menikmati-kuliner-di-kampung-sikunir-kabupaten-wonosobo-minggu-2692021.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p class="card-text my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus et aut neque voluptas ratione eum? Et expedita accusantium, aspernatur sequi omnis dolores enim minus, atque sint repellendus tempore debitis architecto adipisci nisi quasi! Laudantium deleniti, quia itaque nihil expedita enim quae iste consectetur! Omnis iure ipsa amet molestias, exercitationem facere ipsum, nisi sit qui dolor hic. Accusantium cumque ipsum velit iusto enim consectetur ratione quaerat distinctio fuga. Laboriosam, exercitationem impedit, placeat excepturi iusto molestiae architecto earum nisi illo ipsam veniam porro voluptates soluta repudiandae labore nulla aspernatur fugit eius. Tempore sequi, reiciendis aliquid voluptas commodi cum saepe? Assumenda exercitationem, quia aliquid illo laborum, asperiores eius ipsa fugiat hic a nisi? Nostrum, rerum esse rem omnis numquam explicabo sunt, commodi perferendis nihil id, nobis quisquam voluptatibus similique quaerat placeat fuga voluptate fugiat eum dolorem hic cupiditate doloremque et? Libero, suscipit? Tenetur mollitia maiores hic atque adipisci eum ducimus deleniti officia sit.</p>
                <h3 class="text-end fw-bold" style="margin-right:55px;">Harga</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="" class="button button-wisata">Booking Ticket</a>
                </div>
            </div>
          </div>
    </div>
    <div class="container" style="margin-bottom: 20px;">
        <div class="card border-0" style="background-color: #cdcdcd">
            <div class="card-body p-lg-4">
                <h2 class="card-title fw-bold mb-2">Info Lokasi</h2>
                <img class="card-img my-2 img-fluid mx-auto width-fit" src={{ asset('assets/frontend/css/images/test.jpg') }} alt="">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="" class="button button-wisata"> Lihat Detail Peta</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 20px;">
        <div class="card border-0" style="background-color: #cdcdcd">
            <div class="card-body p-lg-4">
                <h2 class="card-title fw-bold mb-2">Ulasan</h2>
                <div class="card border-0" style="background-color: #e8e8e8">
                    <div class="card-body p-lg-4">
                        <div class="user">
                            <div class="row row-cols-auto mb-3">
                                <div class="col">
                                    <img src="https://www.its.ac.id/aktuaria/wp-content/uploads/sites/100/2018/03/user.png" alt="fotoprofil" width="40" height="40" class="d-inline-block align-text-top">
                                </div>
                                <div class="col p-0 align-baseline">
                                    <h6 class="wisata fw-bold" style="margin-top:10px">User</h6>
                                </div>
                            </div>
                        </div>
                        <p class="card-text"><small class="text">Rate</small></p>
                        <p class="card-text my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quod autem dolor alias excepturi consequuntur pariatur quasi aliquam asperiores eius.</p>
                        <div class="row justify-content-start">
                            <div class="col-3 px-0">
                                <img src={{ asset('assets/frontend/css/images/telagawarna.png') }} class="img-fluid rounded">
                            </div>
                            <div class="col-3 px-0">
                                <img src={{ asset('assets/frontend/css/images/telagawarna.png') }} class="img-fluid rounded">
                            </div>
                            <div class="col-3 px-0">
                                <img src={{ asset('assets/frontend/css/images/telagawarna.png') }} class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
