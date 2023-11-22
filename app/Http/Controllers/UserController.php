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
        $user = User::all();
        return view('/admin/user',compact('user'));
        //
    }
    
    public function edit()
    {
        $user = auth()->user();
        return view('admin.edit', compact('user'));
        //
    }
    
    public function update(Request $request)
{
        $user = auth()->user();
        $user->prenom=$request->input('prenom');
        $user->nom=$request->input('nom'); 
        $user->adresse=$request->input('adresse');
        $user->telephone=$request->input('telephone');
        $user->email=$request->input('email');
        $user->password=$request->input('password');

        $user->update();
      return redirect()->route('user.edit')->with('success', 'Profile updated successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $user=User::find($id);
    //     dd($user);
    //     return view('user.edit',compact('user'));
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */ 
    // public function update(Request $request, string $id)
    // {
    //     $user=User::find($id);
    //     $user->prenom=$request->input('prenom');
    //     $user->nom=$request->input('nom'); 
    //     $user->adresse=$request->input('adresse');
    //     $user->telephone=$request->input('telephone');
    //     $user->profil=$request->input('profil');
    //     $user->email=$request->input('email');
    //     $user->password=$request->input('password');

    //     $user->update();
    //     return redirect()->route('user.liste');
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    

public function destroy(string $id)
    {
        $utilisateur = User::find($id);
        $utilisateur->delete();
        return redirect()->route('user.index');
        //
    }
    public function block($id)
{
    $user = User::findOrFail($id);

    if ($user->statut == 0) {
        return redirect()->route('user.index')->with('error', 'Cet utilisateur est déjà bloqué.');
    }

    $user->update(['statut' => 0]);

    return redirect()->route('user.index')->with('success', 'Utilisateur bloqué avec succès.');
}
/**
 * Débloque un utilisateur.
 */
public function unblock($id)
{
    $user = User::findOrFail($id);

    if ($user->statut == 1) {
        return redirect()->route('user.index')->with('error', 'Cet utilisateur n\'est pas bloqué.');
    }

    $user->update(['statut' => 1]);

    return redirect()->route('user.index')->with('success', 'Utilisateur débloqué avec succès.');
}

    }

