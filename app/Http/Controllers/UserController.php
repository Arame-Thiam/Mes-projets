<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all('profil');
        return view('/admin/user',compact('user'));
        //
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        $user=User::find($id);
        return view('user.edit',compact('user'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::find($id);
        $user->prenom=$request->input('prenom');
        $user->nom=$request->input('nom'); 
        $user->adresse=$request->input('adresse');
        $user->telephone=$request->input('telephone');
        $user->profil=$request->input('profil');
        $user->email=$request->input('email');
        $user->password=$request->input('password');

        $user->update();
        return redirect()->route('user.liste');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
    // Récupérez l'utilisateur que vous souhaitez supprimer par son ID
    $utilisateur = User::find($id);

    // Vérifiez si l'utilisateur existe
    if (!$utilisateur) {
        return redirect()->route('users.index')->with('error', 'L\'utilisateur n\'existe pas.');
    }

    // Supprimez l'utilisateur
    $utilisateur->delete();

    // Redirigez l'utilisateur vers la liste des utilisateurs avec un message de succès
    return redirect()->route('users.index')->with('success', 'L\'utilisateur a été supprimé avec succès.');
}

    }

