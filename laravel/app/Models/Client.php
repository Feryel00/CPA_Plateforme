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


];
    public function compte(){
        return $this->hasOne(Compte::class,'client_id');
    }
}
