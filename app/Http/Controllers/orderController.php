<?php

namespace App\Http\Controllers;

use App\Models\OrdreMission;
use App\Models\RapportDeMission;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(){
        $orders = OrdreMission::all();

        return view('admin pages.adminAcceil' , compact('orders'));
    }


    public function create()
    {
        return view('admin pages.ordre.ajouterOrdre');
    }

    public function store(Request $request){
        $formFields = $request->validated();

        OrdreMission::create($formFields);

        return to_route('admin pages\adminAcceil');
    }


    public function edit($id)
    {
        $order = OrdreMission::findOrFail($id);
        return view('admin pages.ordre.ordreEdit' , compact('order'));
    }


    // public function store(EmployeeRequest $request)
    // {
    //     $this->authorize('create', Employee::class);

    //     // $formFields = $request->validate([
    //     //     'first_name' => 'required|string|min:5|max:255',
    //     //     'last_name' => 'required|string|min:5|max:255',
    //     //     'email' => 'required|email|max:255|unique:employees,email',
    //     //     'phone_number' => 'required',
    //     //     'role' => 'required|in:admin,medecin,infirmier',
    //     //     'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()],
    //     // ]);

    //     $formFields = $request->validated();

    //     $formFields['password'] = Hash::make($formFields['password']);


    //     Employee::create($formFields);

    //     return to_route('employees.index')->with('success', 'Employee created successfully!');
    // }
}
