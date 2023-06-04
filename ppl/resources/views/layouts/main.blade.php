<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('css/front.css') }}">

    <title>KOPIN | {{ $title }}</title>
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="" width="40%" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link {{ ($title === "Produk") ? 'active' : '' }}" href="/products">Produk</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle {{ (($title === "Petani") || ($title === "Barista") || ($title === "Roaster")) ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Mitra Kami
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="/petani">Petani</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="/barista">Barista</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="/roaster">Roaster</a></li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ ($title === "Layanan") ? 'active' : '' }}" href="/layanan">Layanan</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ ($title === "Tentang Kami") ? 'active' : '' }}" href="/about">Tentang Kami</a>
                  </li>
              </ul>
          </div>
          <div>
            <ul class="navbar-nav ms-auto">
              @auth
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          {{ auth()->user()->name }}
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                              <form action="/logout" method="POST">
                                  @csrf
                                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Keluar</button>
                              </form>
                          </li>
                      </ul>
                  </li>
              @else   
                  <li class="nav-item">
                      <a class="nav-link text-dark" href="/login"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
                  </li>
              @endauth
            </ul>
          </div>          
        </div>
      </nav>
    
      <div class="container-fluid p-0">
        @yield('container')
      </div>

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      @yield('scripts')
  </body>
</html>