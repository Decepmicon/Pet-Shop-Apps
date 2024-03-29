<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('catalog');
        }

        return redirect('/');
    }
}
