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
    <h1 class="h3 mb-2 text-gray-800 text-center mt-3" >Kategori</h1>
                    <p class="mb-4 mt-5 text-center">Dibawah ini merupakan beberapa Kategori yang disediakan oleh Giftdish : </p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Kategori Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kategori</th>
                                            <th>Isi</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Kategori 1 Paket Giftdish Mantap</td>
                                            <td>1 Chicken Mentai S, 1 Chiken Mentai L</td>
                                            <td>Rp. 35.000</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Kategori 2 Paket Giftdish Kenyang Banget</td>
                                            <td>1 Beef Mentai L, 1 Chiken Mentai L</td>
                                            <td>Rp. 45.000</td>
                                        <tr>
                                            <td>3.</td>
                                            <td>Kategori 1 Paket Giftdish Hemat</td>
                                            <td>1 Beef Mentai S, 1 Chiken Mentai S</td>
                                            <td>Rp. 30.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        
                       
@endsection