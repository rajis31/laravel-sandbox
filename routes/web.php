<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get("/", [HomeController::class,'index']);
Route::post("/add","HomeController@add")->name("add");