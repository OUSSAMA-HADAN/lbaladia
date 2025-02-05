<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginCOntroller extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request)
    {
        $cin = $request->cin;
        $password = $request->password;  // Assuming password is in the request

        $credentials = [
            'cin' => $cin,
            'password' => $password,
        ];

        // if (Auth::attempt($credentials)) {
            $utilisateur = Auth::id();
            $request->session()->regenerate();
            return to_route('admin.accueil');
        // } else {
            return back()->withErrors(['login' => 'CIN or NUM de Matriculation or Password is incorrect, try again!']);
        // }
    }

    public function logout(Request $request)
    {
        try {
            Session::flush();
            Auth::logout();
            Session::regenerate();
            return redirect()->route('login.show');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
    
}
