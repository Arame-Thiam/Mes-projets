<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Plannings;
use App\Models\Lignes;
use App\Models\User;
use Illuminate\Http\Request;

class PlanningsController extends Controller
{
    public function index()
    {
        $planning = Plannings::all();
        return view('/admin/planning/liste', compact('planning'));
    }

    public function create()
    {
        $lignes = Lignes::all();
        $user = User::all();
        return view('/admin/planning/create', compact('lignes','user'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'date' => 'required|date',
            'heurs' => 'required|string|max:255',
            'lignes_id' => 'required|exists:lignes,id',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('planning.create')
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        $planning = new Plannings();
        $planning->description = $request->input('description');
        $planning->lieu = $request->input('lieu');
        $planning->destination = $request->input('destination');
        $planning->date = $request->input('date');
        $planning->heurs = $request->input('heurs');
        $planning->lignes_id = $request->input('lignes_id');
        $planning->user_id = $request->input('user_id');

        $planning->save();
        return redirect()->route('planning.liste');
    }

    public function edit(string $id)
    {
        $planning = Plannings::find($id);
        $lignes = Lignes::all();
        $user = User::all();
        return view('/admin/planning/edit', compact('planning', 'lignes','user'));
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'date' => 'required|date',
            'heurs' => 'required|string|max:255',
            'lignes_id' => 'required|exists:lignes,id',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('planning.edit', $id)
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        $planning = Plannings::find($id);
        $planning->description = $request->input('description');
        $planning->lieu = $request->input('lieu');
        $planning->destination = $request->input('destination');
        $planning->date = $request->input('date');
        $planning->heurs = $request->input('heurs');
        $planning->lignes_id = $request->input('lignes_id');
        $planning->user_id = $request->input('user_id');

        $planning->update();
        return redirect()->route('planning.liste')->with('success', 'Planning mis à jour avec succès.');
    }

    public function destroy(string $id)
    {
        $planning = Plannings::find($id);

        if (!$planning) {
            return redirect()->route('planning.liste')->with('error', 'Planning introuvable.');
        }

        $planning->delete();

        return redirect()->route('planning.liste')->with('success', 'Planning supprimé avec succès.');
    }
}

?>