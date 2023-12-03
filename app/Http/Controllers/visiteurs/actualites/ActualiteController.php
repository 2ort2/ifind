<?php

namespace App\Http\Controllers\visiteurs\actualites;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    //Fonction permettant d'afficher la page d'actualités
    public function index()
    {
        $actualites = Actualite::join('users', 'actualites.id_user', '=', 'users.id')
            // ->where('users.id_profil', 1)
                ->latest('actualites.created_at')
                    ->select('actualites.id','actualites.contenu','actualites.image_actualite','actualites.titre', 'actualites.statut', 'users.name')
                        ->get();
        return view("visiteurs.actualites.index", compact("actualites"));
    }
}
