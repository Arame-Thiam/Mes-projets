<?php

namespace App\Http\Controllers;
use App\Models\Demandes;
use Illuminate\Http\Request;

class EnvoiController extends Controller
{
    public function index()
    {
        $envoi = Demandes::all();
        return view('/admin/envoi/liste',compact('envoi'));
    }

}
