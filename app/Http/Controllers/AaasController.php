<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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

     // Page : Nos Partenaires
     public function partenaires()
     {
         return view('partenaires');
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
    public function send(Request $request)
    {
        // Validation des champs du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Envoi de l'email
        Mail::html("
        <h3>Nouveau message depuis le site AAAS</h3>
        <p><strong>Nom :</strong> {$request->name}</p>
        <p><strong>Email :</strong> {$request->email}</p>
        <p><strong>Message :</strong><br>{$request->message}</p>
    ", function ($mail) use ($request) {
        $mail->to('infos.aaas07@gmail.com')
             ->subject($request->subject);
    });
    

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
