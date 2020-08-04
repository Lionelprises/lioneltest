<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprenant;
use App\Tuteur;
class ApprenantController extends Controller
{
    public function index(){
        $tuteurs=Tuteur::all();
        return view('page.nouveau', compact('tuteurs'));
    }
    public function store(Request $request){

        // $imagePath=request('photo')->store('uploads','public');
         Apprenant::create([
                        'nom'=>$request->nom,
                        'prenom'=>$request->prenom,
                        'date'=>$request->date,
                        'ville'=>$request->ville,
                        'formation'=>$request->formation,
                        'etablissement'=>$request->etablissement,
                        'contact'=>$request->contact,
                        'email'=>$request->email,
                        'tuteurs_id'=>$request->tuteurs_id,
                        // 'photo'=>$imagePath
                    ]);
                    
            //   return redirect()->route('nouveau');   
            
    }
    public function list(Apprenant $apprenants){
        $apprenants=Apprenant::get();
        $tuteurs=Tuteur::all();
        return view('page.list', compact('apprenants'));
    }
    public function supprimer(string $email){
        
        
        $apprenants=Apprenant::where('email','=',$email)->get();
    
        $apprenants[0]->delete();
        return redirect()->route('liste');
    }
}
