<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetController;




// Login, Register, & Reset Pages 
Route::get("/login",[LoginController::class,'show'])->name("login")->middleware("guest");
Route::get("/register",[RegistrationController::class,'show'])->name("register")->middleware("guest");
Route::get("/reset",[ResetController::class,'show'])->name("reset")->middleware("guest");
Route::get("/reset/{id}",[ResetController::class,'passReset'])->name("passReset")->middleware("guest");
Route::get("/changepass",[ResetController::class,'changePass'])->name("changepass")->middleware("guest");



// Register & Login User
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/register', [RegistrationController::class,'register']);
Route::post('/reset', [ResetController::class,'resetLink']);
Route::post('/reset/{id}', [ResetController::class,'resetPass']);
Route::post('/changepass', [ResetController::class,'changePass']);



// Various User Pagess
Route::middleware("auth")->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post("/add",[HomeController::class,'add'])->name("add");
    Route::get("/message",[HomeController::class,'message']);
    Route::post("/email",[HomeController::class,'email'])->name("email");
    Route::get('/logout', [LoginController::class,'logout'])->name("logout");
});



