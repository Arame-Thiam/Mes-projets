<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    

    public function create()
    {
        $message = Message::all();
        return view('/contact',compact('message'));
    }

    /**
     * Store a newly created resource in storage.
     */ 
    public function store(Request $request)
    {
        $user = Auth::id();

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
            'user_id'=>$user,
        ]);
        return redirect()->route('/contact');
    }
}
