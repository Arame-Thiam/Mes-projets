<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bus = Bus::all();
        return view('/admin/bus/liste',compact('bus'));
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/bus/create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = '';

        if ($request->hasFile('img')) {
            $filename = $request->getSchemeAndHttpHost() . '/assets/img' . time() . '.' . $request->img->extension();
            $request->img->move(public_path('/assets/img'), $filename);
        }

        $bus = Bus::create([
            'image'=>$filename,
            'description'=>$request->description,
            'NombrePlaces'=>$request->NombrePlaces,
            'lignes_id'=>$request->lignes_id
        ]);
        return redirect()->route('/admin/bus/liste');
        //
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bus=Bus::find($id);
        return view('/admin/bus/edit',compact('bus'));
    }
        //
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bus=Bus::find($id);
        $bus->description=$request->input('description');
        $bus->NombrePlaces=$request->input('NombrePlaces');
        $bus->lignes_id=$request->input('lignes_id');

        $bus->update();
        return redirect()->route('/admin/bus/liste');
        //
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bus = Bus::find($id);
        $bus->delete();
        return redirect()->route('/admin/bus/liste');
        //
    }
}