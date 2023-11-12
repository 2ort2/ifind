<?php

namespace App\Http\Controllers\visiteurs\newsletters;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    //Fonction qui ajoute l'email du visiteurs souhaiter s'abonner à la news letter à la base de données
    public function add_news_letter(Request $request)
    {
        $newsletter = new Newsletter();
        $newsletter-> email = $request->email;

        $newsletter-> save();
        return redirect()->back()->with("success","Bravo, desormais vous seriez parmi les premiers à être informer des actualités de Ifind ou de nouvelle opportunité d'emploi!");
    }
}
