<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plannings;
class ChauffeurController extends Controller
{
    public function index()
    {
        $art = Plannings::all();
        return view('/chauffeur/acceuil/',compact('art'));
    }
    
}
 