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
            ->where('actualites.statut', 1)
                ->latest('actualites.updated_at')
                    ->select('actualites.id','actualites.contenu','actualites.image_actualite','actualites.titre', 'actualites.statut', 'users.name')
                        ->get();
        return view("visiteurs.actualites.index", compact("actualites"));
    }

    public function detail($id)
    {
        $actualite = Actualite::join('users', 'actualites.id_user', '=', 'users.id')
            ->where('actualites.id', $id)
                ->latest('actualites.updated_at')
                    ->select('actualites.id','actualites.contenu','actualites.image_actualite','actualites.titre', 'actualites.statut', 'users.name')
                        ->first();
        // $actualite = Actualite::find($id);
        return view('visiteurs.actualites.detail', compact('actualite'));
    }
}
