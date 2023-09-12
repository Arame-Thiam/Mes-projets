<?php

namespace App\Http\Controllers;
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
        return view('/admin/ligne/create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lignes::create([
            'libelle'=>$request->libelle,
            'nombre_bus'=>$request->nombre_bus,
            'lieu'=>$request->lieu,
            'destination'=>$request->destination
        ]);
        return redirect()->route('/admin/ligne/liste');
        //
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
        $ligne=Lignes::find($id);
        return view('/admin/ligne/edit',compact('ligne'));
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ligne=Lignes::find($id);
        $ligne->libelle=$request->input('libelle');
        $ligne->nombre_bus=$request->input('nombre_bus');
        $ligne->lieu=$request->input('lieu');
        $ligne->destination=$request->input('destination');

        $ligne->update();
        return redirect()->route('ligne.liste');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ligne = Lignes::find($id);
        $ligne->delete();
        return redirect()->route('ligne.liste');
        //
    }
}
