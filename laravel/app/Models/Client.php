<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compte;

class Client extends Model
{
    use HasFactory;
   // public $timestamps=false;
   protected $fillable = [
    'nom',
    'prenom',
    'numero_tel',
    'type',
    'passport_numero',
    'date_de_naissance_titulaire',
    'departement_de_naissance',
    'profession',
    'revenus',
    'situation_famille',
    'nom_de_conjoint',
    'prenom_de_conjoint',
    'date_de_naissance_conjoint',
    'sexe_conjoint',
    'profession_conjoint',
    'revenus_conjoint',
    'situation_famille_conjoint',
    'memo'

];
    public function compte(){
        return $this->hasOne(Compte::class,'client_id');
    }
}
