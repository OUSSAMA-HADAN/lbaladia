<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fctController extends Controller
{
    public function  accueil(){
        return view('fonctionnaire pages\fctAcceil');
    }
}
