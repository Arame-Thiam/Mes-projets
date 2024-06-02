<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trajet;
use App\Models\Lignes;
use Illuminate\Support\Facades\Auth;

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
 
    //  public function app(string $id)
    // {
    //     $ligne = Trajet::findOrFail($id);
    //     return view('/infos',compact('ligne'));
    // }
    public function app(String $id)
    {
        $user = auth()->user();
        $ligne = Trajet::findOrFail($id);
        return view('/infos', compact('user', 'ligne'));
        //
    }

    public function add(string $id)
    {
        $ligne = Trajet::findOrFail($id);
        return view('/paiement',compact('ligne'));
    }


    public function show()
    {
    if (Auth::check()) {
        $userId = Auth::id();
        $trajects = Trajet::where('id', $userId)->get();
        return view('/voyages', compact('trajects'));
    } else {
        return redirect('/login');
    }
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
