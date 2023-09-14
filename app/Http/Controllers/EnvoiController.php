<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnvoiController extends Controller
{
    public function index()
    {
        $envoi = Demande::all();
        return view('/admin/bus/liste',compact('envoi'));
    }

}
