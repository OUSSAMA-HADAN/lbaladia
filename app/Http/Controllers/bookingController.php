<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{    
    function Booking($name){
        return view('booking',['name'=>$name]);
    }
}
