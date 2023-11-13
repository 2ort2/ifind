<?php

namespace App\Http\Controllers\administrateurs\authentification;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        Auth::guard('administrateur')->logout();
        return redirect()->route('login_admin');
    }

    //Fonction permettant la creation d'un compte administrateur
    public function admin_register(Request $request)
    {
        // Valider les données entrées par l'utilisateur
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Vérifier si la validation a échoué
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Vérifier si l'email existe déjà dans la base de données
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            return redirect()->back()->with('error', 'Adresse e-mail existant, vous ne pouvez pas créer plusieurs comptes!');
        }

        // Créer un nouveau user
        $nom_complet = $request->nom. " ".$request->prenom;
        $valeur = 1;
        $user = new User([
            'name' => $nom_complet,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_profil' => $valeur,
        ]);

        // Enregistrer le user dans la base de données
        $user->save();

        // Rediriger avec un message de succès vers la route home

        return redirect()->route('login_admin')->with('success', 'Compte créé avec succès!');
    }

    //Fonction permettant d'authentifier le recruteur
    public function admin_login_success(Request $request)
    {
        // Valider les données entrées par l'utilisateur
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Vérifier si la validation a échoué
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Tentative de connexion de l'utilisateur avec le guard par administrateur
        if (Auth::guard('administrateur')->attempt(['email' => $request->email, 'password' => $request->password, 'id_profil' => 1, 'statut' => 1]))
        {
            // Authentification réussie
            return redirect()->route('accueil_admin')->with('success', 'Vous êtes connecté !');
        }
        else
        {
            // Authentification échouée
            return redirect()->back()->with('error', 'Identifiants invalides. Veuillez réessayer.');
        }
    }

}
