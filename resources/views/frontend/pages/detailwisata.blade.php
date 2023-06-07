@extends('frontend.include.template')
@section('title','Detail Berita')
@section('content')

@include('frontend.include.navbar')

<section class="detailwisata">
    <div class="container" style="margin-top: 105px;margin-bottom: 20px;">
        <div class="card border-0" style="background-color: #cdcdcd;">
            <div class="card-body p-lg-4">
<<<<<<< HEAD
                <h2 class="card-title fw-bold mb-2">{{ $wisata->name }}</h2>
                <div class="rating">
                    @php
                        $rating = $wisata->rating; 
                    @endphp
                    @for ($i = 1; $i <= $rating; $i++)
                        <span class="star fas fa-star"></span>
                    @endfor
                  </div>
                <div class="row ms-2">
                    <div class="col-9 mr-2 m-0 p-0">
                        <img class="card-img my-2 img-fluid mx-auto width-fit" src="{{ asset($wisata->image) }}" alt="">
                    </div>
                    <div class="col-2 my-3 ms-2 p-0 ">
                        <div class="row m-0 ">
                            <img class="card-img mb-3 img-fluid mx-auto width-fit rounded" src="{{ asset($wisata->image) }}" alt="">
                        </div>
                        <div class="row m-0">
                            <img class="card-img mb-3 img-fluid mx-auto width-fit" src="{{ asset($wisata->image) }}" alt="">
                        </div>
                        <div class="row m-0">
                            <img class="card-img img-fluid mx-auto width-fit" src="{{ asset($wisata->image) }}" alt="">
                        </div>
                    </div>
                </div>
                <p class="card-text my-3">{{ $wisata->description }}</p>
                <h3 class="text-end fw-bold" style="margin-right:55px;">Rp. {{ number_format($wisata->price) }}</h3>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="/detail/{{ $wisata->id }}" class="button button-wisata">Booking Ticket</a>
=======
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
>>>>>>> bc8f166341bad2b07f4530139f00bb6255a8e539
                </div>
            </div>
          </div>
    </div>
    <div class="container" style="margin-bottom: 20px;">
        <div class="card border-0" style="background-color: #cdcdcd">
            <div class="card-body p-lg-4">
                <h2 class="card-title fw-bold mb-2">Info Lokasi</h2>
<<<<<<< HEAD
                <div>
                    <iframe width="800" height="300" frameborder="0" src="https://www.bing.com/maps/embed?h=300&w=800&cp=-7.355971881063553~109.90476125968826&lvl=14.164355034644323&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
                    </iframe>
                    <p>{{ $wisata->location }}</p>
                    <div style="white-space: nowrap; text-align: center; width: 800px; padding: 6px 0;">
                       <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=-7.355971881063553~109.90476125968826&amp;sty=r&amp;lvl=14.164355034644323&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
                       <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=-7.355971881063553~109.90476125968826&amp;sty=r&amp;lvl=14.164355034644323&amp;rtp=~pos.-7.355971881063553_109.90476125968826____&amp;FORM=MBEDLD">Get Directions</a>
                   </div>
               </div>
                {{-- 
                <img width="1000" height="300" src="https://api.mapbox.com/styles/v1/mapbox/light-v9/static/pin-s+f00(30.055867,51.408365)/30.0558434,51.4082343,15,0,0/640x480?access_token=pk.eyJ1Ijoibmlja2ZpdHoiLCJhIjoiY2p3d2g3N2F5MDZ4azQwcG12dWticDB0diJ9.qnQV5QgYN_eDwg4uUdbO6Q" alt="Pripyat Amusement Park" class="static-map">
                
                {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="" class="button button-wisata"> Lihat Detail Peta</a>
                </div> --}}
=======
                <img class="card-img my-2 img-fluid mx-auto width-fit" src={{ asset('assets/frontend/css/images/test.jpg') }} alt="">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="" class="button button-wisata"> Lihat Detail Peta</a>
                </div>
>>>>>>> bc8f166341bad2b07f4530139f00bb6255a8e539
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 20px;">
        <div class="card border-0" style="background-color: #cdcdcd">
            <div class="card-body p-lg-4">
<<<<<<< HEAD
                <h2 class="card-title fw-bold mb-2">Tambah Ulasan</h2>
                <div class="card border-0" style="background-color: #ffffff">
                    <div class="card-body p-lg-4">
                        <form action="/komen/{{ $wisata->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="user">
                                <div class="row row-cols-auto mb-2">
                                    <div class="col-md-11">
                                        <div class="form-group row">
                                        <label class="col fw-bold">Komentar</label>
                                        <div class="card-text sm-14 p-2 align-baseline">
                                            <input class="form-control" name="description" type="text"/>
                                            @error('description')
                                                <code>
                                                    {{ $message }}
                                                </code>
                                            @enderror
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary offset-md-10" value="Submit">
                        </form>
                    </div>
                    
                    
                </div>
                @if ($komen)
                    <div class="card-body p-lg-4">
                        <div class="user">
                            {{-- {{ dd($komen) }} --}}
                            @foreach ($komen as $komen)
                                
                                <div class="row row-cols-auto mb-2">
                                    <div class="col-sm-1">
                                        <img src="https://www.its.ac.id/aktuaria/wp-content/uploads/sites/100/2018/03/user.png" alt="fotoprofil" width="60" height="60" class="d-inline-block align-text-top">
                                    </div>
                                    <div class="col p-0 align-baseline mr-3">
                                        <h6 class="wisata fw-bold" style="margin-top:10px">{{ $komen->user->name }}</h6>
                                        <h6 class="wisata" style="margin-top:3px">{{ $komen->description }}</h6>
                                    </div>
                                </div>
                            @endforeach
                            
                        </div>
                        {{-- <p class="card-text"><small class="text">Rate</small></p>
                        {{-- <div class="row justify-content-start">
                            <div class="col-3 px-0 ml-5">
                                <img src={{ asset('assets/frontend/css/images/telagawarna.png') }} class="img-fluid rounded">
                            </div>
                        </div> --}}
                    </div> 
                    @else
                    
                    @endif
=======
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
>>>>>>> bc8f166341bad2b07f4530139f00bb6255a8e539
            </div>
        </div>
    </div>
</section>

<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> bc8f166341bad2b07f4530139f00bb6255a8e539
