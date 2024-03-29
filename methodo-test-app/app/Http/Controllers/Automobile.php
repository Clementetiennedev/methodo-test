<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Automobile extends Controller
{
    public function index()
    {
        // Récupérer la liste des automobiles
        $automobiles = Automobile::all();
        return response()->json($automobiles);
    }

    public function show($id)
    {
        // Récupérer une automobile par son ID
        $automobile = Automobile::find($id);
        return response()->json($automobile);
    }

    public function store(Request $request)
    {
        // Créer une nouvelle automobile
        $automobile = new Automobile();
        $automobile->marque = $request->input('marque');
        $automobile->modele = $request->input('modele');
        $automobile->save();
        return response()->json($automobile);
    }

    public function update(Request $request, $id)
    {
        // Mettre à jour une automobile existante
        $automobile = Automobile::find($id);
        $automobile->marque = $request->input('marque');
        $automobile->modele = $request->input('modele');
        $automobile->save();
        return response()->json($automobile);
    }

    public function destroy($id)
    {
        // Supprimer une automobile par son ID
        $automobile = Automobile::find($id);
        $automobile->delete();
        return response()->json(['message' => 'Automobile deleted']);
    }
}
