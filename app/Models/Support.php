<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_support',
        'code',
        'duree_pret_jours',
        'caution_euros',
        'disponible_pret',
    ];
}
