<?php

namespace App\Http\Controllers\visiteurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    //Fonction affichant la page d'accueil du site vitrine
    public function index()
    {
        return view("visiteurs.accueil");
    }
}
