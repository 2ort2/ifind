<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageVisiteur extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom_visiteur',
        'email_visiteur',
        'objet',
        'contenu',
        'statut',
    ];
}
