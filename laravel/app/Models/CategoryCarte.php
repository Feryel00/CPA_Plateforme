<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCarte extends Model
{
    use HasFactory;

    public function cartes()
    {
        return $this->hasMany(Carte::class);
    }
}
