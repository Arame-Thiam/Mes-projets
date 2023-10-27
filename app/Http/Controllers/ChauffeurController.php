<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth;
use App\Models\Plannings;
class ChauffeurController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $art = Plannings::search($request->search)->get();
        }else {
            $art = Plannings::all();
        }
        return view('/chauffeur/index',compact('art'));
    }
    
}
 