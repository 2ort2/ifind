<?php

namespace App\Http\Controllers\recruteurs\authentification;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;

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

    //Fonction permettant d'ajouter un recruteur
    public function recruteur_register(Request $request)
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
        $valeur = 2;
        $statut = 0;
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_profil' => $valeur,
            'statut' => $statut,
        ]);

        // Enregistrer le user dans la base de données
        $user->save();

        // Rediriger avec un message de succès vers la route home

        return redirect()->route('login_recruteur')->with('success', 'Compte créé avec succès, un administrateur confirmera la creation de votre et un email vous sera envoyé.');
    }

    //Fonction permettant d'authentifier le recruteur
    public function recruteur_login_success(Request $request)
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

        // Tentative de connexion de l'utilisateur avec le guard par défaut
        if (Auth::guard('recruteur')->attempt(['email' => $request->email, 'password' => $request->password, 'id_profil' => 2, 'statut' => 1])) {
            // Authentification réussie
            return redirect()->route('accueil_recruteur')->with('success', 'Vous êtes connecté !');
        } else {
            // Authentification échouée
            return redirect()->back()->with('error', 'Identifiants invalides. Veuillez réessayer.');
        }
    }

    //Fonction qui deconnecte le recruteur connecté
    public function logout()
    {
        Auth::guard('recruteur')->logout();
        return redirect()->route('login_recruteur');
    }


}
