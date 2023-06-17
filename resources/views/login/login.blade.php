@extends('layouts.mainlogin')

@section('content')
<div class ="container">
    <div class="card">
        <div class="card-title text align-center">Giftdish Login</div>
        <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Masukkan Email.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Checklist</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
</div>
        </div>
    </div>
</div>

@endsection