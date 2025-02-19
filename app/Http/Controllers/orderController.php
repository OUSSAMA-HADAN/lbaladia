<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderMissionRequest;
use App\Models\OrdreMission;
use App\Models\Utilisateur;
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
        $utilisateurs = Utilisateur::all();
        return view('admin pages.ordre.ajouterOrdre', compact('utilisateurs'));
    }

    public function store(OrderMissionRequest $request)
    {
        $formFields = $request->validated();

        OrdreMission::create($formFields);
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

        $formFields = $request->validated();

        $ordre->update($formFields);

        return to_route('admin.accueil');
    }

    public function destroy($id)
    {
        $ordre = OrdreMission::findOrFail($id);

        try {
            $ordre = OrdreMission::findOrFail($id);
            $ordre->delete();
            return to_route('admin.accueil');
        } catch (\Exception $e) {
            return to_route('admin.accueil');
        }
    }
}
