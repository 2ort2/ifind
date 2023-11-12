<?php

namespace App\Http\Controllers\visiteurs\jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //Fonction qui affiche la page des jobs disponibles
    public function index()
    {
        return view("visiteurs.jobs.index");
    }
}
