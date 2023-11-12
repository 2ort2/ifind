<?php

namespace App\Http\Controllers\administrateurs\messages;

use App\Http\Controllers\Controller;
use App\Models\MessageVisiteur;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //Fonction qui affiches les messages non lu des visiteurs
    public function liste_des_messages_non_lus()
    {
        $message_non_lus = MessageVisiteur::where("statut",0)->latest()->get();
        return view("administrateurs.messages_visiteurs.non_lu", compact("message_non_lus"));
    }

    //Liste des messages lu mais non repondu des visiteurs
    public function liste_des_messages_non_repondu()
    {
        $message_non_repondus = MessageVisiteur::where("statut",1)->latest()->get();
        return view("administrateurs.messages_visiteurs.non_repondu", compact("message_non_repondus"));
    }

    //Fonction affichant le message envoyé par l'utilisateur
    public function lire_message_visiteur($id)
    {
        $message = MessageVisiteur::find($id);
        if($message)
        {
            $message ->statut=1;
            $message_save = $message-> update();
        }
        $message_non_lus = MessageVisiteur::where("statut",0)->latest()->get();

        return view('administrateurs.messages_visiteurs.detail', compact('message', 'message_non_lus'));
    }

    //Fonction qui supprime un message du visiteur
    public function lire_message_visiteur_delete($id)
    {
        $message = MessageVisiteur::find($id);
        $message->delete();
        return redirect()->route('liste_des_messages_non_lus')->with('success','Suppression réussie!');
    }
}
