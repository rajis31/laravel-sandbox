<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;



// Login & Register Pages 
Route::get("/login",[LoginController::class,'show'])->name("login")->middleware("guest");
Route::get("/register",[RegistrationController::class,'show'])->name("register")->middleware("guest");

// Login & Register 
// Register & Login User
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/register', [RegistrationController::class,'register']);

// Various User Pagess
Route::middleware("auth")->group(function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post("/add",[HomeController::class,'add'])->name("add");
    Route::get("/message",[HomeController::class,'message']);
    Route::post("/email",[HomeController::class,'email'])->name("email");
    Route::get('/logout', [LoginController::class,'logout'])->name("logout");
});



