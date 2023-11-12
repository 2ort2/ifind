<?php

namespace App\Http\Controllers\recruteurs\authentification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Fonction affichant la page d'authentification des visiteurs
    public function login()
    {
        return view("recruteurs.authentification.login.login");
    }

    //Fonction affichant la page de creation de compte recruteurs
    public function register()
    {
        return view("recruteurs.authentification.register.register");
    }
}
