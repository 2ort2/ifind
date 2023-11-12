<?php

namespace App\Http\Controllers\administrateurs\actualites;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    //Fonction qui affiche le formulaire d'ajout d'actualité à la base de donnees
    public function formulaire_actualite()
    {
        return view("administrateurs.actualites.index");
    }

    //Fonction ajoute l'actualité à la base de données
    public function ajouter_actualite(Request $request)
    {
        $image = $request->file('image_actualite');

        $actualite = new Actualite();
        $actualite-> titre = $request->titre;
        $actualite-> contenu = $request->contenu;

        if($image != null)
        {
            $image_original_name = $image->getClientOriginalName();
            $image_name = time().'_'.strtolower($image_original_name);
            $image_path = 'upload/images/actualites/';
            $image->move(public_path('storage/'.$image_path), $image_name);
            $actualite-> image_actualite = $image_path.''.$image_name;
        }
        $actualite-> save();

        return redirect()->back()->with("success","Actualité ajouté avec succes!");
    }

    //Fonctin qui affiche la liste des actualités dans un tableau
    public function liste_des_actualites()
    {
        $actualites = Actualite::latest()->get();
        return view('administrateurs.actualites.liste', compact('actualites'));
    }

    //Fonction qui permet de publier une actualité
    public function publier_actualite($id)
    {
        $actualite = Actualite::find($id);
        if($actualite)
        {
            $actualite ->statut=1;
            $actualite_save = $actualite-> update();
        }

        return redirect()->back()->with('success','Actualité publié avec succes!');
    }

    //Fonction qui annule la publication de l'actualité
    public function annuler_publication_actualite($id)
    {
        $actualite = Actualite::find($id);
        if($actualite)
        {
            $actualite ->statut=0;
            $actualite_save = $actualite->update();
        }

        return redirect()->back()->with('success','Publication annulée avec succes!');
    }

    //Fonction qui permet de supprimer une actualité
    public function supprimer_actualite($id)
    {
        $actualite = Actualite::find($id);
        $actualite->delete();
        return redirect()->route('liste_des_actualites')->with('success','Suppression réussie!');
    }

    //Fonction qui permet d'éditer le contenu d'une actualité
    public function editer_actualite($id)
    {
        $actualite = Actualite::find($id);

        return view('administrateurs.actualites.editer', compact('actualite'))->with('success','Actualité publié avec succes!');
    }

    //Fonction qui permet d'enregistrer les modifications apportées à l'actualité à la base de donnée
    public function modifier_actualite(Request $request)
    {
        $data = $request->all();

        if (array_key_exists('image_actualite', $data)) {
            $image = $request->file('image_actualite');
        } else {
            $image = null;
        }


        $actualite = Actualite::find($request->id);

        if ($actualite)
        {
            $actualite->titre = $request->titre;
            $actualite->contenu = $request->contenu;

            if ($image != null)
            {
                $image_original_name = $image->getClientOriginalName();
                $image_name = time() . '_' . strtolower($image_original_name);
                $image_path = 'upload/images/actualites/';
                $image->move(public_path('storage/' . $image_path), $image_name);
                $actualite->image_actualite = $image_path . '' . $image_name;
            }

            $actualite->save();
            return redirect()->back()->with("success", 'Actualité modifiée avec succès');
        } else
        {
            return redirect()->back()->with("error", "L'actualité n'a pas été trouvée.");
        }
    }
}
