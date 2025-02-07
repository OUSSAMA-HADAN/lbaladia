<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderMissionRequest;
use App\Models\OrdreMission;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OrdreMission::all();
        return view('admin pages.adminAcceil', compact('orders'));
    }

    public function create()
    {
        return view('admin pages.ordre.ajouterOrdre');
    }

    public function store(OrderMissionRequest $request)
    {
        OrdreMission::create($request->validated());
        return to_route('admin.accueil');
    }

    public function edit($id)
    {
        $order = OrdreMission::findOrFail($id);
        return view('admin pages.ordre.ordreEdit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $ordre = OrdreMission::findOrFail($id);

        $formFields = $request->validate([
            'dateDebut' => 'nullable|date|before_or_equal:dateFin',
            'dateArrive' => 'nullable|date|after_or_equal:dateDebut',
            'dateFin' => 'nullable|date|after_or_equal:dateDebut',
            'destination' => 'nullable|string|max:255',
            'objectif' => 'nullable|string|max:500',
            'etatRemboursement' => 'nullable|boolean',
        ]);

        $ordre->update($formFields);

        return to_route('admin.accueil');
    }
}
