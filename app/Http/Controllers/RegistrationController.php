<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Requests\RegistrationRequest;
use App\Traits\RegisterUser;


class RegistrationController extends Controller
{
    use RegisterUser;

    public function show(){
        return view("auth.register");
    }

    public function register(RegistrationRequest $requestFields){
        $user = $this->registerUser($requestFields);
        return redirect()->route("home");
    }
}
