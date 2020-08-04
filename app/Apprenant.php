<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    
    protected $fillable=['email', 'nom', 'prenom','date','ville', 'formation', 'etablissement',
                         'contact','photo', 'email','tuteurs_id'];

    public function tuteurs(){
        return $this->belongsTo('App\Tuteur');
    }
}
