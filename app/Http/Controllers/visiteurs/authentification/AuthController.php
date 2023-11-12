<?php

namespace App\Http\Controllers\visiteurs\authentification;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Fonction qui affiche le formulaire de connexion au visiteur
    public function login()
    {
        return view("visiteurs.authentification.login");
    }

    //Fonction qui affiche le formulaire d'inscription des visiteurs
    public function register()
    {
        return view("visiteurs.authentification.register");
    }

    
}
