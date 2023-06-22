@extends('layouts.mainproduk')

@section('content')
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
                    <a class="nav-link active" href="{{ route('landing') }}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                </li>
            </ul>
        </div>
  </div>
</nav>

    <!-- Page Heading -->
<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center mt-3" >Daftar Produk</h1>
        <p class="mb-4 mt-5 text-center">Dibawah ini merupakan beberapa daftar produk yang disediakan oleh Giftdish : </p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Giftdish Chicken Mentai</td>
                                    <td>Rp. 15.000</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Giftdish Beef Mentai</td>
                                    <td>Rp. 22.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>     

@endsection