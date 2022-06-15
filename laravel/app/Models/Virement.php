<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virement extends Model
{
    use HasFactory;
    protected $fillable = [

        'montant',
        'compte_id',
        'compte_destinataire_id'
       ];
}
