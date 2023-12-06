<?php

namespace App\Http\Controllers\administrateurs\actualites;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use DB;
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
        $actualite->id_user = $request->id_user;
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
        $actualites = Actualite::join('users', 'actualites.id_user', '=', 'users.id')
            ->where('users.id_profil', 1)
                ->latest('actualites.created_at')
                    ->select('actualites.id','actualites.titre', 'actualites.statut')
                        ->get();
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

    //Fonction qui affiche la liste des actualités ajouter par les recruteurs
    public function recruteur_liste_des_actualites()
    {
        // $actualites = DB::table('actualites')
        //     ->join('users', 'actualites.user_id', '=', 'users.id')
        //         ->where('users.id_profil', '=', 2)
        //             ->latest('actualites.created_at')
        //                 ->get();
        $actualites = Actualite::join('users', 'actualites.id_user', '=', 'users.id')
            ->where('users.id_profil', 2)
                ->latest('actualites.created_at')
                    ->select('actualites.id','actualites.titre', 'actualites.statut')
                        ->get();


        return view('administrateurs.recruteurs.actualites.liste', compact('actualites'));
    }

    //Fonction qui permet à l'admin de lire l'actualité ajouter par un recruteur
    public function editer_actualite_recruteur($id)
    {
        // $actualite = Actualite::find($id);

        $actualite = Actualite::join('users', 'actualites.id_user', '=', 'users.id')
            ->where('actualites.id', $id)
                    ->select('actualites.id','actualites.titre', 'actualites.statut', 'actualites.contenu', 'actualites.created_at', 'actualites.image_actualite', 'users.name')
                        ->first();

        return view('administrateurs.recruteurs.actualites.detail', compact('actualite'))->with('success','Actualité publié avec succes!');
    }
}
