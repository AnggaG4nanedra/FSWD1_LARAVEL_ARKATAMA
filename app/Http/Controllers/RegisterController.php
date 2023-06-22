<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request ->username,
            'email' => $request ->email,
            'password' => Hash::make ($request ->password)
        ]);

        return redirect('dashboard')->with ('success', 'Data berhasil dibuat');
    }
}