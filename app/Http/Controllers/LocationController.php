<?php

namespace App\Http\Controllers;
use App\Models\Demandes;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $location = Demandes::all();
        return view('/admin/location/liste',compact('location'));
    }
}
