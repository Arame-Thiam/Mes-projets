<?php

namespace App\Http\Controllers;
use App\Models\Trajet;
use App\Models\Lignes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class TrajetsController extends Controller
{
    /**s
     * Display a listing of the resource.
     */
    public function index()
    {
        $x = Trajet::all();
        return view('admin/trajets/liste', compact('x'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lignes = Lignes::all();
        return view('/admin/trajets/create', compact('lignes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lieu' => 'required|string',
            'arrivee' => 'required|string',
            'prix' => 'required|numeric',
            'date' => 'required|date',
            'heure' => 'required',
            'lignes_id' => 'required|exists:lignes,id',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('trajets.create')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }
    
        $trajet = new Trajet();
        $trajet->lieu = $request->input('lieu'); // Utilisation du même casse que dans la validation
        $trajet->arrivee = $request->input('arrivee'); // Utilisation du même casse que dans la validation
        $trajet->prix = $request->input('prix'); // Utilisation du même casse que dans la validation
        $trajet->date = $request->input('date'); // Utilisation du même casse que dans la validation
        $trajet->heure = $request->input('heure'); // Utilisation du même casse que dans la validation
        $trajet->lignes_id = $request->input('lignes_id'); // Utilisation du même casse que dans la validation
    
        $trajet->save();
        return redirect()->route('trajets.liste');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trajet = Trajet::find($id);
    
            // Vérifiez si la ligne existe avant de la supprimer
            if (!$trajet) {
                return redirect()->route('trajets.liste')->with('error', 'Ligne introuvable.');
            }
            // Supprimez la ligne
            $trajet->delete();
            
            // Redirigez avec un message de succès
            return redirect()->route('trajets.liste')->with('success', 'Ligne supprimée avec succès.');
    }
}
