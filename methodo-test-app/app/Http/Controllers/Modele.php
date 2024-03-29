<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Modele extends Controller
{
    public function index()
    {
        // Récupérer la liste des marques
        $modeles = Modele::all();
        return response()->json($modeles);
    }
    public function show($id)
    {
        // Récupérer une modele par son ID
        $modele = Modele::find($id);
        return response()->json($modele);
    }
    public function store(Request $request)
    {
        // Créer une nouvelle modele
        $modele = new Modele();
        $modele->nom = $request->input('nom');
        $modele->save();
        return response()->json($modele);
    }

    public function update(Request $request, $id)
    {
        // Mettre à jour un modele existante
        $modele = Modele::find($id);
        $modele->nom = $request->input('nom');
        $modele->save();
        return response()->json($modele);
    }

    public function destroy($id)
    {
        // Supprimer un modele par son ID
        $modele = Modele::find($id);
        $modele->delete();
        return response()->json(['message' => 'Modeles deleted']);
    }
}
