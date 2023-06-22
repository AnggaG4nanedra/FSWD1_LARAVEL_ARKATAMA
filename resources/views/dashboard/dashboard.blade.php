<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<!-- Navbar-->
<nav class="navbar navbar-expand-md navbar-secondary bg-light">
      <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Dashboard GIFTDISH</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->url('/') == url('/') ? 'active' : '' }}" href="{{ route('landing') }}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->url('/produk') == url('/produk') ? 'active' : '' }} dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{ route('daftarproduk') }}">Daftar Produk</a>
                        <a class="dropdown-item" href="{{ route('kategori') }}">Kategori</a>
                    </div>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengguna</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{ route('daftarpengguna') }}">Daftar Pengguna</a>
                        <a class="dropdown-item" href="{{ route('gruppengguna') }}">Grup Pengguna</a>
                    </div>
                  </li>
                </li>
                
            </ul>
            <div class="d-flex">
              <form action="{{ url('/logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary m-2">Logout</button>
              </form>
             
                </div>
        </div>
  </div>
</nav>

<!--carousel/slider-->
<section class="page-section" id="Carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('/') }}bs5landing/assets/img/carousels/1.jpg" class="d-block w-100 h-200" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('/') }}bs5landing/assets/img/carousels/2.jpg" class="d-block w-100 h-200" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('/') }}bs5landing/assets/img/carousels/3.jpg" class="d-block w-100 h-200" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>