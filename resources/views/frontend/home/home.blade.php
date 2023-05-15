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
    <div style="height:40px;"></div>
</section>
<section class="homepage4">
    <div class="container">
        <div class="row">
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
<div style="height:40px;"></div>
</section>

        <div class="container col-12 why margin-bottom-xlg padding-bottom-lg" id="learn-more">
          <h2 class="text-center margin-bottom-lg">It makes your life better!</h2>
          <p class="col-8 col-10-sm text-center margin-top-sm padding-bottom-xlg center-block text-grey">Our simple and effective tool allows you to accomplish your goals with minimal effort by increasing your efficiency, effectiveness, and productivity to ensure you perform at your maximum potential.</p>
          <div class="row text-center">
            <div class="col-4 col-12-sm text-center">
              <img src="https://farm5.staticflickr.com/4751/24960508607_4d45f8abcc_o.png">
              <h3>Boost Efficiency</h3>
              <p class="text-grey center-block">We help you work in a well-organized and competent manner, enabling you to make the best use of your time and resources.</p>
            </div>
            <div class="col-4 col-12-sm text-center">
              <img src="https://farm5.staticflickr.com/4666/28052002329_5d40672846_o.png">
              <h3>Improve Accuracy</h3>
              <p class="text-grey center-block">Our proven process will have a high impact on your work effectiveness. Simply put - succeed more often and make fewer mistakes.</p>
            </div>
            <div class="col-4 col-12-sm text-center">
              <img src="https://farm5.staticflickr.com/4672/39798770352_ff85c9b4c5_o.png"></a>
              <h3>Drive Growth</h3>
              <p class="text-grey center-block">Together we increase your work output. You will be able do more with less so you can focus on key areas to drive the highest level of growth.</p>
            </div>
          </div>
        </div>
        <div class="container col-12 why margin-bottom-xlg padding-bottom-lg" id="learn-more2">
          <h2 class="text-center margin-bottom-xlg">Our process – Performance Optimization</h2>
          <div class="row text-center">
            <div class="col-4 col-12-sm text-center">
              <img src="https://farm5.staticflickr.com/4655/38566515180_aa7a33b0de_m.jpg">
              <h3>Step 1</h3>
              <p class="text-grey center-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-4 col-12-sm text-center">
              <img src="https://farm5.staticflickr.com/4766/25504681877_71d01d6452_m.jpg">
              <h3>Step 2</h3>
              <p class="text-grey center-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="col-4 col-12-sm text-center">
              <img src="https://farm5.staticflickr.com/4720/25504681767_eda86974f4_m.jpg">
              <h3>Step 3</h3>
              <p class="text-grey center-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="full-width bg-darkestblue padding-top-xlg padding-bottom-xlg">
          <div class="container col-12 text-center margin-top-xlg margin-bottom-xlg">
            <div class="col-12 center-block margin-top-xlg margin-bottom-xlg">
              <h2 class="text-white margin-top-none margin-bottom-lg">Get more out of your work for less</h2>
              <p class="text-white text-large">We help you reach new heights by unlocking and maintanining your true potential.</p>
              <div class="margin-top-lg"><a class="promo-btn" href="javascript:;">GET HELP NOW</a></div>
            </div>
          </div>
        </div>
        <div id="footer" class="full-width bg-darkestgray padding-top-lg padding-bottom-lg">
          <div class="container col-12 text-gray">
            <p>Copyright 2018 Company</p>
            <div>
            </div>
          </div>
      </div>

@endsection
