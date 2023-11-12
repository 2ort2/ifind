<?php

namespace App\Http\Controllers\visiteurs\contacts;

use App\Http\Controllers\Controller;
use App\Models\MessageVisiteur;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //Fonction affichant la page contenant les contacts
    public function index()
    {
        return view("visiteurs.contacts.index");
    }

    //Fonction qui ajoute le message du visiteur à la base de données
    public function envoyer_message(Request $request)
    {
        $message = new MessageVisiteur();
        $message-> nom_visiteur = $request->nom;
        $message-> email_visiteur = $request->email;
        $message-> objet = $request->objet;
        $message-> contenu = $request->contenu;

        $message-> save();
        return redirect()->back()->with("success","Votre message a été avec succes, l'equipe IFIND vous contactera bientôt!");
    }
}
