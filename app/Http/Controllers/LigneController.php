<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Lignes;
use Illuminate\Http\Request;

class LigneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ligne = Lignes::all();
        return view('/admin/ligne/liste',compact('ligne'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ligne = Lignes::all();
        return view('/admin/ligne/create', compact('ligne'));
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validez les données du formulaire
    $validator = Validator::make($request->all(), [
        'numero' => 'required|numeric',
        'libelle' => 'required|string|max:255',
        'image' => 'required|image|max:2048', 
        'lieu' => 'required|string|max:255',
        'destination' => 'required|string|max:255',
    ]);

    // Si la validation échoue, redirigez avec les erreurs
    if ($validator->fails()) {
        return redirect()->route('ligne.create')
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Veuillez corriger les erreurs dans le formulaire.');
    }

    $ligne = new Lignes();
    $ligne->numero = $request->input('numero');
    $ligne->libelle = $request->input('libelle');
    $ligne->lieu = $request->input('lieu');
    $ligne->destination = $request->input('destination');

    // Vérifiez si un fichier image est téléchargé
    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('public/images'); 
        $ligne->image = str_replace('public/', '', $image);
    }

    $ligne->save();
    return redirect()->route('ligne.liste'); 
}

public function edit(string $id)
{
    $ligne = Lignes::find($id);
    return view('/admin/ligne/edit', compact('ligne'));
}

public function update(Request $request, string $id)
{
    // Validez les données du formulaire de mise à jour
    $validator = Validator::make($request->all(), [
        'numero' => 'required|numeric',
        'libelle' => 'required|string|max:255',
        'lieu' => 'required|string|max:255',
        'destination' => 'required|string|max:255',
        'image' => 'image|max:2048', 
    ]);

    // Si la validation échoue, redirigez avec les erreurs
    if ($validator->fails()) {
        return redirect()->route('ligne.edit', $id)
            ->withErrors($validator)
            ->withInput()
            ->with('error', 'Veuillez corriger les erreurs dans le formulaire.');
    }

    $ligne = Lignes::find($id);
    $ligne->numero = $request->input('numero');
    $ligne->libelle = $request->input('libelle');
    $ligne->lieu = $request->input('lieu');
    $ligne->destination = $request->input('destination');

    // Vérifiez si un fichier image est téléchargé
    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('public/images'); 
        $ligne->image = str_replace('public/', '', $image);
    }

    // Enregistrez les modifications
    $ligne->update();
    return redirect()->route('ligne.liste')->with('success', 'Ligne mise à jour avec succès.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $ligne = Lignes::find($id);
    
    // Vérifiez si la ligne existe avant de la supprimer
    if (!$ligne) {
        return redirect()->route('ligne.liste')->with('error', 'Ligne introuvable.');
    }
    // Supprimez la ligne
    $ligne->delete();
    
    // Redirigez avec un message de succès
    return redirect()->route('ligne.liste')->with('success', 'Ligne supprimée avec succès.');
}
}
