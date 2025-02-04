<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\TableController;
use App\Http\Middleware\IsOussamaUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {return view('login');});
