<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuteur;
class TuteurController extends Controller
{
    public function index(){
        $tuteurs=Tuteur::all();
        return view('page.nouveau', compact('tuteurs'));
    }

    public function store(Request $request){

                    
                    Tuteur::create([
                        'nom'=>$request->nom,
                        'prenom'=>$request->prenom,
                        'profession'=>$request->profession,
                        'telephone'=>$request->telephone,
                    ]);
            //   return redirect()->route('nouveau');   
            
    }

}
