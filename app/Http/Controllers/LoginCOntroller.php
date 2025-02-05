<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginCOntroller extends Controller
{
    public function index(){
        return view('login');
    }
    
}
