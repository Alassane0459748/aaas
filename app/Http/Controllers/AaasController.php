<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AaasController extends Controller
{
    // Page d'accueil
    public function home()
    {
        return view('accueil');
    }

    // Page : À propos
    public function apropos()
    {
        return view('a-propos');
    }

    // Page : Nos Missions
    public function missions()
    {
        return view('missions');
    }

    // Page : Actualités
    public function actualites()
    {
        return view('actualites');
    }

    // Page : Événements
    public function evenements()
    {
        return view('evenements');
    }

    // Page : Contact
    public function contact()
    {
        return view('contact');
    }
}
