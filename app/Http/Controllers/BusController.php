<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Bus;
use App\Models\Lignes;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bus = Bus::all();
        return view('/admin/bus/liste', compact('bus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lignes = Lignes::all();
        return view('/admin/bus/create', compact('lignes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validez les données du formulaire
        $validator = Validator::make($request->all(), [
            'numero' => 'required|numeric',
            'image' => 'required|image|max:2048',
            'description' => 'required|string|max:255',
            'places' => 'required|numeric',
            'etat' => 'required|in:En_fonction,En_location',
            'lignes_id' => 'required|exists:lignes,id',
        ]);

        // Si la validation échoue, redirigez avec les erreurs
        if ($validator->fails()) {
            return redirect()->route('bus.create')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        $bus = new Bus();
        $bus->numero = $request->input('numero');
        $bus->description = $request->input('description');
        $bus->places = $request->input('places');
        $bus->etat = $request->input('etat');
        $bus->lignes_id = $request->input('lignes_id');

        // Vérifiez si un fichier image est téléchargé
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
            $bus->image = str_replace('public/', '', $image);
        }

        $bus->save();
        return redirect()->route('bus.liste');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bus = Bus::find($id);
        $lignes = Lignes::all();
        return view('/admin/bus/edit', compact('bus', 'lignes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validez les données du formulaire de mise à jour
        $validator = Validator::make($request->all(), [
            'numero' => 'required|numeric',
            'description' => 'required|string|max:255',
            'places' => 'required|numeric',
            'etat' => 'required|in:En_fonction,En_location',
            'lignes_id' => 'required|exists:lignes,id',
            'image' => 'image|max:2048',
        ]);

        // Si la validation échoue, redirigez avec les erreurs
        if ($validator->fails()) {
            return redirect()->route('bus.edit', $id)
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        $bus = Bus::find($id);
        $bus->numero = $request->input('numero');
        $bus->description = $request->input('description');
        $bus->places = $request->input('places');
        $bus->etat = $request->input('etat');
        $bus->lignes_id = $request->input('lignes_id');

        // Vérifiez si un fichier image est téléchargé
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/images');
            $bus->image = str_replace('public/', '', $image);
        }

        // Enregistrez les modifications
        $bus->update();
        return redirect()->route('bus.liste')->with('success', 'Bus mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bus = Bus::find($id);

        // Vérifiez si le bus existe avant de le supprimer
        if (!$bus) {
            return redirect()->route('bus.liste')->with('error', 'Bus introuvable.');
        }

        // Supprimez le bus
        $bus->delete();

        // Redirigez avec un message de succès
        return redirect()->route('bus.liste')->with('success', 'Bus supprimé avec succès.');
    }
}
