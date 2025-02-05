<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceilController extends Controller
{
    public function acceil(){
        return view('acceil');
    }
}
