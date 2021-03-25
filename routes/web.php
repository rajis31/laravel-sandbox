<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get("/", [HomeController::class,'index']);
Route::get("/message",[HomeController::class,'message']);
Route::post("/add",[HomeController::class,'add'])->name("add");
Route::post("/email",[HomeController::class,'email'])->name("email");