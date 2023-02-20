<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function __construct() {
        $this->middleware('auth'); 
    }
    
    public function index()
    {
        $candidats = Candidat::all();
        return view('candidat.liste', ['candidats' => $candidats]);
    }

    
    public function create()
    {
        $formations=Formation::all();
        $referentiels=Referentiel::all()->only([1,2,3]);
        $types=Type::all();
        return view('candidat.create',['formations'=>$formations, 'referentiels'=>$referentiels, 'types'=>$types]);
    }

   
    public function store(Request $request)
    {
        
        $candidat=Candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'age' => $request->age,
            'niveauEtude' => $request->niveauEtude,
            'sexe' => $request->sexe,
        ]);    
        $candidat ->formations()->attach($request->formations);
        $formation=Formation::find($request->formations);
        $formation->referentiels()->attach($request->referentiels);
        $referentiel=Referentiel::find($request->referentiels);
        Referentiel::create([
            'libelle'=>$referentiel->libelle,
            'valideted'=>$referentiel->valideted,
            'horaire'=>$referentiel->horaire,
            'type_id'=>$request->types,


        ]);
       
        return redirect('/candidat');
    }


   
    public function edit(Candidat $candidat)
    {
        $formations=Formation::all();
        $referentiels=Referentiel::all()->only([1,2,3]);
        $types=Type::all();

        return view('candidat.edit', ['candidat' =>$candidat, 'formations'=>$formations, 
         'referentiels'=>$referentiels, 'types'=>$types]);
    }

   
    public function update(Request $request, Candidat $candidat)
    {
        
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->email = $request->email;
        $candidat->age = $request->age;
        $candidat->niveauEtude = $request->niveauEtude;
        $candidat->sexe = $request->sexe;

        $candidat->save();
        return redirect() ->route('candidat.index');
    }

   
    public function destroy(Candidat $candidat)
    {
        $candidat->delete();
        return redirect() ->route('candidat.index');
    }
}
