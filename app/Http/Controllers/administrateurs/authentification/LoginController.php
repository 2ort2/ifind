<?php

namespace App\Http\Controllers\administrateurs\authentification;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Fonction affichant la page d'authentification - Login
    public function login()
    {
        return view("administrateurs.authentification.login.index");
    }

    //Fonction affichant la page d'authentification - Register
    public function register()
    {
        return view("administrateurs.authentification.register.index");
    }

    //Fonction qui deconnecte l'admin connecté
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_admin');
    }
}
