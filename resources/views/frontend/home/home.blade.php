@extends('frontend.include.template')
@section('title','Homepage')
@section('content')

@include('frontend.include.navbar')
<section class="homepage1">
    <div>
        <div class="bg-img">
          <div class="container text-center">
            <h1 class="hero-header margin-bottom-md">Title</h1>
            <p class="hero-subheader margin-top-xsm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque voluptatum assumenda molestias!</p>
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
            <h2 class="text-center margin-bottom-lg fw-bold">Title</h2>
            <div class="col-6">
              <div class="col-15">
                <img class="img-responsive center-block" src={{ asset('assets/frontend/css/images/BukitSeroja.jpg') }}>
              </div>
            </div>
            <div class="col-6 text-left pull-right">
              <div class="col-15">
                <h4 class="margin-bottom-none margin-top-sm fw-bold">Title</h4>
                <p class="section text-grey margin-top-none margin-bottom-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Feugiat sed lectus vestibulum mattis ullamcorper. Cras semper auctor neque vitae tempus quam. Ac ut consequat semper.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<section class="homepage3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <a href="#" class="button">Category</a>
                    <a href="#" class="button">Category</a>
                    <a href="#" class="button">Category</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="homepage4">
    <div class="container">
        <div class="row my-5">
            <div class="col-4">
                <div class="card border-0" style="width: 18rem;">
                    <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold">Title</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, perferendis?</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-0" style="width: 18rem;">
                    <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold">Title</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, perferendis?</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-0" style="width: 18rem;">
                    <img src={{ asset('assets/frontend/css/images/Sinsu.jpeg') }} class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h5 class="fw-bold">Title</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, perferendis?</p>
                    </div>
                </div>
            </div>
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
                <h2 class="text-center margin-bottom-lg fw-bold">Title</h2>
                <div class="col">
                    <div class="box bg-body-secondary">
                        <img class="" src="https://www.sololearn.com/Icons/Courses/1051.png">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolore vitae cupiditate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 
@endsection
