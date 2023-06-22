@extends('layouts.mainlogin')

@section('content')

<div class ="container">
    <div class="card m-5 mx-auto" style="width: 32rem">
        <div class="card-title text align-center m-auto"><h3>Register</h3></div>
        <div class="card-body">
        <form action="{{ url('/register') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Masukkan Email.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary m-2">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
 
@endsection