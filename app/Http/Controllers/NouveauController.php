<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprenant;
use App\Tuteur;

class NouveauController extends Controller
{
    //
    // public function index(){
    //     return view('page.nouveau');
    // }

    // public function store(Request $request){

    //     $imagePath=request('photo')->store('uploads','public');
    //      Apprenant::create([
    //                     'nom'=>$request->nom,
    //                     'prenom'=>$request->prenom,
    //                     'date'=>$request->date,
    //                     'ville'=>$request->ville,
    //                     'formation'=>$request->formation,
    //                     'etablissement'=>$request->etablissement,
    //                     'contact'=>$request->contact,
    //                     'email'=>$request->email,
    //                     'photo'=>$imagePath
    //                 ]);
                    
    //                 Tuteur::create([
    //                     'nom'=>$request->nom,
    //                     'prenom'=>$request->prenom,
    //                     'profession'=>$request->profession,
    //                 ]);
    //         //   return redirect()->route('nouveau');   
            
    // }

}
