<?php

namespace App\Http\Controllers\administrateurs\recruteurs;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RecruteurController extends Controller
{
    //Fonction affichant la liste des comptes recruteurs non activé
    public function index()
    {
        $users = User::where('id_profil', 2)->where('statut', 0)->latest()->get();
        return view('administrateurs.recruteurs.compte_non_active', compact('users'));
    }

    //Fonction qui permet d'activer le compte recruteur
    public function activer_compte_recruteur($id)
    {
        $user = User::find($id);
        if($user)
        {
            $user ->statut=1;
            $user_save = $user-> update();
        }

        return redirect()->back()->with('success','Compte recruteur activé avec succès!');
    }

    //Fonction qui annule la publication de l'actualité
    public function desactiver_compte_recruteur($id)
    {
        $user = User::find($id);
        if($user)
        {
            $user ->statut=0;
            $user_save = $user->update();
        }

        return redirect()->back()->with('success','Compte desactivé avec succès!');
    }

    //Fonction qui permet de supprimer une actualité
    public function supprimer_compte_recruteur($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('liste_compte_non_confirme')->with('success','Suppression réussie!');
    }

    //Fonction qui permet d'éditer le contenu d'une actualité
    public function editer_actualite($id)
    {
        $actualite = User::find($id);

        return view('administrateurs.actualites.editer', compact('actualite'))->with('success','Actualité publié avec succes!');
    }

}
