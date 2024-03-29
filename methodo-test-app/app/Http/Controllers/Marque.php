<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Marque extends Controller
{
    public function index()
    {
        // Récupérer la liste des marques
        $marques = Marque::all();
        return response()->json($marques);
    }
    public function show($id)
    {
        // Récupérer une marque par son ID
        $marque = Marque::find($id);
        return response()->json($marque);
    }
    public function store(Request $request)
    {
        // Créer une nouvelle marque
        $marque = new Marque();
        $marque->nom = $request->input('nom');
        $marque->save();
        return response()->json($marque);
    }

    public function update(Request $request, $id)
    {
        // Mettre à jour une marques existante
        $marque = Marque::find($id);
        $marque->nom = $request->input('nom');
        $marque->save();
        return response()->json($marque);
    }

    public function destroy($id)
    {
        // Supprimer une marques par son ID
        $marque = Marque::find($id);
        $marque->delete();
        return response()->json(['message' => 'Marque deleted']);
    }
}
