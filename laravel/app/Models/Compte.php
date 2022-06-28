<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Compte extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_client',
        'prenom_client',
        'solde',
        'num_compte',
        'client_id'

    ];
    public function client(){

        return $this->belongsTo(Client::class,'client_id');
    }
}

