<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    
    protected $fillable=[ 'nom', 'prenom','profession','telephone',];

    public function apprenants(){
        return $this->hasMany('App\Apprenant');
    }

}
