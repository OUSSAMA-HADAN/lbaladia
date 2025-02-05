<?php

use App\Http\Controllers\AcceilController;
use App\Http\Controllers\fctController;
use App\Http\Controllers\LoginCOntroller;
use Illuminate\Support\Facades\Route;


Route::get("/",[LoginCOntroller::class,'index'])->name('login.show');
Route::post("/login", [LoginCOntroller::class, 'login'])->name('login.store');
Route::get("/login/logout", [LoginCOntroller::class, 'logout'])->name('login.logout');

Route::get("/Admin/acceil",[AcceilController::class,'accueil'])->name('admin.accueil');
Route::get("/FCT/acceil",[fctController::class,'accueil']);
