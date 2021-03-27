<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(LoginRequest $requestFields){
       $attributes = $requestFields->only(["username","password"]);

        if(Auth::attempt($attributes)){
            return redirect()->route("home");
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return back();
    }
}
