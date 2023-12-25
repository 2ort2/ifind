<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvenementDispo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'titre',
        'event_image',
        'lieu',
        'date_debut',
        'date_fin',
        'description',
        'statut',
    ];
}
