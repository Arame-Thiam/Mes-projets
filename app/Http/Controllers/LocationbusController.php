<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use App\Models\Message;
use Illuminate\Http\Request;

class LocationbusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loc = Bus::all();
        return view('/locations',compact('loc'));
    }

    public function Bus()
    {
        $a = Bus::all();
        return view('/loc',compact('a'));
    }


    public function create()
    {
        return view('loc');
    }

    /**
     * Store a newly created resource in storage. 
     */ 
    public function store(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'telephone'=> 'required',
            'description'=> 'required',
        ]);
        

       $sms = Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'description'=>$request->description,
        ]);
        return redirect('/loc ')->with('success', 'Votre demmande a ete bien envoye un de nos agent vous cantactera dans les plus bref delais mercie de patientez');
    }
    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = Bus::findOrFail($id);
        //return view('/cultivateur/detaille',compact('detaille'));
        return view('/detail-locations',compact('detail'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
