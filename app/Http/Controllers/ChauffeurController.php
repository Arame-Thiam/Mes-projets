<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Planning;
class ChauffeurController extends Controller
{
    public function index()
    {
        $art = Planning::all();
        return view('/chauffeur/index',compact('art'));
    }
    
}
 