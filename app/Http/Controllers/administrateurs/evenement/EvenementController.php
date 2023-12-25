<?php

namespace App\Http\Controllers\administrateurs\evenement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EvenementDispo;
use DB;

class EvenementController extends Controller
{
   public function affiche_evenement(){
    return view('administrateurs.evenement.index');
   }


   //Fonction ajoute l'évenement à la base de données
   public function ajouter_evenement(Request $request)
   {
       $image = $request->file('event_image');

       $evenementdispo = new EvenementDispo();
       $evenementdispo-> titre = $request->titre;
       $evenementdispo-> lieu = $request->lieu;
       $evenementdispo-> date_debut = $request->date_debut;
       $evenementdispo-> date_fin= $request->date_fin;
       $evenementdispo->id_user = $request->id_user;
       $evenementdispo-> description = $request->description;

       if($image != null)
       {
           $image_original_name = $image->getClientOriginalName();
           $image_name = time().'_'.strtolower($image_original_name);
           $image_path = 'upload/images/evenement/';
           $image->move(public_path('storage/'.$image_path), $image_name);
           $evenementdispo-> event_image = $image_path.''.$image_name;
       }
       $evenementdispo-> save();

       return redirect()->back()->with("success","Evenement ajouté avec succes!");
   }

   //Fonctin qui affiche la liste des évenements dans un tableau
   public function liste_des_evenements()
   {
    $evenementdispos = EvenementDispo::join('users', 'evenement_dispos.id_user', '=', 'users.id')
           ->where('users.id_profil', 1)
               ->latest('evenement_dispos.created_at')
                   ->select('evenement_dispos.id','evenement_dispos.titre', 'evenement_dispos.statut')
                       ->get();
       return view('administrateurs.evenement.liste', compact('evenementdispos'));
   }


   //Fonction qui permet de publier une actualité
   public function publier_evenement($id)
   {
       $evenementdispo = EvenementDispo::find($id);
       if($evenementdispo)
       {
           $evenementdispo ->statut=1;
           $evenementdispo_save = $evenementdispo-> update();
       }

       return redirect()->back()->with('success','Evenement publié avec succes!');
   }

   //Fonction qui annule la publication de l'actualité
   public function annuler_publication_evenement($id)
   {
       $evenementdispo = EvenementDispo::find($id);
       if($evenementdispo)
       {
           $evenementdispo ->statut=0;
           $evenementdispo_save = $evenementdispo->update();
       }

       return redirect()->back()->with('success','Publication annulée avec succes!');
   }

   //Fonction qui permet de supprimer une actualité
   public function supprimer_evenement($id)
   {
       $evenementdispo =  EvenementDispo::find($id);
       $evenementdispo->delete();
       return redirect()->route('liste_des_evenements')->with('success','Suppression réussie!');
   }

   //Fonction qui permet d'éditer le contenu d'une actualité
   public function editer_evenement($id)
   {
       $evenementdispo =  EvenementDispo::find($id);

       return view('administrateurs.evenement.editer', compact('evenementdispo'))->with('success','Evenement publié avec succes!');
   }

   //Fonction qui permet d'enregistrer les modifications apportées à l'actualité à la base de donnée
   public function modifier_evenement(Request $request)
   {
       $data = $request->all();

       if (array_key_exists('event_image', $data)) {
           $image = $request->file('event_image');
       } else {
           $image = null;
       }


       $evenementdispo = EvenementDispo::find($request->id);

       if ($evenementdispo)
       {
           $evenementdispo->titre = $request->titre;
           $evenementdispo->lieu = $request->lieu;
           $evenementdispo->date_debut = $request->date_debut;
           $evenementdispo->date_fin= $request->date_fin;
           $evenementdispo->description = $request->description;

           if ($image != null)
           {
               $image_original_name = $image->getClientOriginalName();
               $image_name = time() . '_' . strtolower($image_original_name);
               $image_path = 'upload/images/evenementdispos/';
               $image->move(public_path('storage/' . $image_path), $image_name);
               $evenementdispo-> event_image = $image_path . '' . $image_name;
           }

           $evenementdispo->save();
           return redirect()->back()->with("success", 'Evenement modifiée avec succès');
       } else
       {
           return redirect()->back()->with("error", "L'Evenement n'a pas été trouvée.");
       }
   }
}


