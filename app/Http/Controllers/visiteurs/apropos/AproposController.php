<?php

namespace App\Http\Controllers\visiteurs\apropos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AproposController extends Controller
{
    //Fonction affichant la page apropos
    public function index()
    {
        return view("visiteurs.apropos.index");
    }
}
