<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
        <img src="{{ asset('assets/frontend/css/images/RawalaText.png') }}" alt="Logo" width="100" class="d-inline-block align-text-top">
      <a class="navbar-brand" href="#"></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
<<<<<<< HEAD
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          @guest
            <li class="nav-item">
              <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? ' active-link' : '' }}">
                  <span>Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/infoBerita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/infoWisata">Wisata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">Register</a>
            </li>
          @endguest
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, {{ session('name') }}
              </a>
              <ul class="dropdown-menu" {{ (session('role')=="admin") }}>
                <li><a class="dropdown-item" href="/dashboard">Dashbord</a></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
              <ul class="dropdown-menu" {{ (session('role')=="pengelola") }}>
                <li><a class="dropdown-item" href="/dashboard">Dashbord</a></li>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
              <ul class="dropdown-menu" {{ (session('role')=="user") }}>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
              </ul>
            </li> 
          @endauth
=======

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Contact</a>
          </li>
>>>>>>> 700dc2895e6ff059e0ef92c9f10fca891d7df040
        </ul>
      </div>
    </div>
  </nav>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark', 'shadow');
      } else {
        nav.classList.remove('bg-dark', 'shadow');
      }
    });
  </script>
