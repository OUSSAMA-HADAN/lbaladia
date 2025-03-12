<?php

use App\Http\Controllers\AcceilController;
use App\Http\Controllers\fctController;
use App\Http\Controllers\LoginCOntroller;
use App\Http\Controllers\orderController;
use Illuminate\Support\Facades\Route;


Route::get("/",[LoginCOntroller::class,'index'])->name('login.show');
Route::post("/login", [LoginCOntroller::class, 'login'])->name('login.store');
Route::get("/login/logout", [LoginCOntroller::class, 'logout'])->name('login.logout');

// Route::get("/Admin/ordreEdit/{id}",[orderController::class,'update'])->name('admin.ordreEdit');
// Route::get("/FCT/acceil",[fctController::class,'accueil']);
// Route::get("/admin/ajouter_ordre",[orderController::class,'accueil'])->name('admin.ordre');


// Route::delete("/Admin/ordreEdit/{id}", [orderController::class, 'delete'])->name('admin.ordreEdit');

Route::get("/Admin/rapport",[AcceilController::class,'rapport'])->name('admin.rapports');



Route::get("/Admin/accueil", [orderController::class, 'index'])->name('admin.accueil');
Route::get('/Admin/ordreCreate', [orderController::class, 'create'])->name('ordres.create');
Route::post('/Admin/ordreStore', [orderController::class, 'store'])->name('ordres.store');
Route::get('/Admin/ordreEdit/{id}', [orderController::class, 'edit'])->name('ordres.edit');
Route::put('/Admin/{ordre}', [orderController::class, 'update'])->name('ordres.update');
Route::delete('/Admin/{ordre}', [orderController::class, 'destroy'])->name('ordres.destroy');