<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\TableController;
use App\Http\Middleware\IsOussamaUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('user');
});

Route::get("/table",[tableController::class,'Etudiant']);
Route::get("/booking/{name}",[bookingController::class,'Booking'])->middleware(IsOussamaUser::class);
Route::get('/app', function () {return view('app');});
