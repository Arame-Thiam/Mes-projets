<?php

namespace App\Http\Controllers;
use App\Models\Plannings;       
use Illuminate\Http\Request;

class PlanningsController extends Controller
{
    public function index()
    {
        $a = Plannings::all();
        return view('/admin/planning/liste',compact('a'));
    }

}
