<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    
    public function index()
    {
        $formations = Formation::all();
        return view('formation.liste', ['formations' => $formations]);
    }

   
    public function create()
    {
        return view('formation.create');
    }

   
    public function store(Request $request)
    {
        Formation::create([
            'nom' => $request->nom,
            'duree' => $request->duree,
            'description' => $request->description,
            'isStarted' => $request->isStarted,
            'date_debut' => $request->date_debut,
        ]);    
       
        return redirect()->route('welcome');
    }

 

    public function edit(Formation $formation)
    {
        return view('formation.edit', ['formation' =>$formation]);

    }

    public function update(Request $request, Formation $formation)
    {
         
        $formation->nom = $request->nom;
        $formation->duree = $request->duree;
        $formation->description = $request->description;
        $formation->isStarted = $request->isStarted;
        $formation->date_debut = $request->date_debut;

        $formation->save();
        return redirect() ->route('formation.index');
    }

    public function destroy(Formation $formation)
    {
        $formation->delete();
        return redirect() ->route('formation.index');
    }
}
