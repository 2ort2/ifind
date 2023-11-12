<?php

namespace App\Http\Controllers\recruteurs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //Fonction permettant d'afficher la page d'accueil du recruteur
    public function index()
    {
        return view("recruteurs.accueil");
    }
}
