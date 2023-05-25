<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid mx-5">
      <a class="navbar-brand" href="#"></a>
      <img src="{{ asset('assets/frontend/css/images/LogoTextnew.png') }}" alt="Logo" width="120" height="70" class="d-inline-block align-text-top">
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
