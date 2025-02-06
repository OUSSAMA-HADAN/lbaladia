<?php

namespace App\Http\Controllers;

use App\Models\OrdreMission;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function accueil(){
        $orders = OrdreMission::all();
        dd($orders);
        return view('admin pages\adminAcceil' , compact('orders'));
    }


}
