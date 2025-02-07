<?php

namespace App\Http\Controllers;

use App\Models\OrdreMission;
use Illuminate\Http\Request;

class AcceilController extends Controller
{
    public function accueil(){
        $orders = OrdreMission::all();
        // dd($orders);
        return view('admin pages\adminAcceil', compact('orders'));
    }
    public function rapport(){
        return view('admin pages.adminRapport');
    }
    public function rapportEdit($id){
        dd($id);
        return view('admin pages.rapportEdit');
    }
}
