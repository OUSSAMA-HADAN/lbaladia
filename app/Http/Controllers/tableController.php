<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tableController extends Controller
{
    function Etudiant(){
        $data=[];
        $data["nom"]="HEDDANE";
        $data["prenom"]="OUSSAMA";
        $data["poste"]="Etudiant";
        $data["module"]=["gestion des données","programmation web","système d'exploitation"];


        return view('Table',compact('data'));
    }
}