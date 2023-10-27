<?php

namespace App\Http\Controllers;
use App\Models\Lignes;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    { 
        $reft = Lignes::all();
        return view('welcome',compact('reft'));
    }

    public function charo()
    { 
        $reft = Lignes::all();
        return view('envoi',compact('reft'));
    }
}
