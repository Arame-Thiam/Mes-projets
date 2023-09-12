<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $sms = Message::all();
        return view('/admin/message',compact('sms'));
        //
    }
   
    public function destroy(string $id)
    {
        $sms = Message::find($id);
        $sms->delete();
        return redirect()->route('admin/message');
        //
    }

    public function create()
    {
        return view('contact');
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
        return redirect('/contact ')->with('success', 'Votre Message a ete bien envoye un de nos agent vous cantactera dans les plus bref delais mercie de patientez');
    }
}
