@extends('layouts.mainpengguna')

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
                    <a class="nav-link active" href="{{route ('landing') }}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                </li>
                </li>
            </ul>
        </div>
  </div>
</nav>

    <!-- Page Heading -->
<div class="container">
    <h1 class="h3 mb-2 text-gray-800 text-center mt-3" >Daftar Pengguna</h1>
        <p class="mb-4 mt-5 text-center">Dibawah ini merupakan beberapa daftar pengguna website Giftdish : </p>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Nomor HP</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Naruto Uzumaki</td>
                                    <td>narutouzumaki@gmail.com</td>
                                    <td>Jln. Ramen No 23., RT 1 RW 1, Ds. Konoha Raya</td>
                                    <td>911</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Sasuke Uchiha</td>
                                    <td>sasukeuchiha@gmail.com</td>
                                    <td>Jln. Ramen No 22., RT 2 RW 1, Ds. Konoha Raya</td>
                                    <td>811</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Sakura Haruno</td>
                                    <td>sakuraharuno@gmail.com</td>
                                    <td>Jln. Ramen No 21., RT 3 RW 1, Ds. Konoha Raya</td>
                                    <td>711</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Hatake Kakashi</td>
                                    <td>hatakekakashi@gmail.com</td>
                                    <td>Jln. Ramen No 20., RT 4 RW 1, Ds. Konoha Raya</td>
                                    <td>911</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>     


@endsection