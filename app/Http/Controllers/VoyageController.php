<?php

namespace App\Http\Controllers;
use App\Models\Demandes;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function index()
    {
        $voyage = Demandes::all();
        return view('/admin/reservation/listes',compact('voyage'));
    }
}
