<?php

namespace App\Http\Controllers\recruteurs\actualites;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActuController extends Controller
{
    //Fonction qui affiche le formulaire d'ajout d'actualité
    public function index()
    {
        return view('recruteurs.actualites.index');
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
}
