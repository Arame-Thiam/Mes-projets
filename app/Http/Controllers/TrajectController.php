<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trajet;
use App\Models\Lignes;

class TrajectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
      {
        $a = Trajet::all();
        return view('/voyages', compact('a'));
     }



    public function show(string $id)
    {
        $ligne = Trajet::findOrFail($id);
        return view('/voyages',compact('ligne'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
   

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
        //
    }
}
