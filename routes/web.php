<?php

use App\Http\Controllers\AcceilController;
use App\Http\Controllers\LoginCOntroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login",[LoginCOntroller::class,'index']);
Route::get("/Admin/acceil",[AcceilController::class,'accueil']);
