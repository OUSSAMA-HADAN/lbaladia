<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function  accueil(){
        return view('admin pages\ajouterOrdre');
    }
}
