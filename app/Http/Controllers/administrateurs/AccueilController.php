<?php

namespace App\Http\Controllers\administrateurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //Fonction qui affiche la page d'accueil du site administrateur
    public function index()
    {
        return view("administrateurs.accueil");
    }
}
