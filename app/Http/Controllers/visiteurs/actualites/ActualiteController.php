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
        $actualites = Actualite::where('statut', 1)->latest()->get();
        return view("visiteurs.actualites.index", compact("actualites"));
    }
}
