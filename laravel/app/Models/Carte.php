<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_carte',
        'date_expiration',
    ];
    public function category(){
        return $this->belongsTo(CategoryCarte::class);
    }
}
