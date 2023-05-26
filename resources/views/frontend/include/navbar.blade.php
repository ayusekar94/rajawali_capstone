<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
    <div class="container">
        <img src="{{ asset('assets/frontend/css/images/RawalaText.png') }}" alt="Logo" width="100" class="d-inline-block align-text-top" href="#">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
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
        </ul>
      </div>
    </div>
  </nav>
  <script type="text/javascript">
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('shadow');
      } else {
        nav.classList.remove('shadow');
      }
    });
  </script>
