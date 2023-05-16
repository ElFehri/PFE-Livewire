<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    

    public function mesPublications(){
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Récupérer toutes les publications avec les annonces et les informations associées à l'utilisateur authentifié
        $publications = $user->publications()->with('annonce', 'information')->get();

        // Tableaux pour stocker les annonces et les informations
        $annonces = [];
        $informations = [];

        // Parcourir les publications et stocker les annonces et les informations dans les tableaux respectifs
        foreach ($publications as $publication) {
            if ($publication->annonce) {
                $annonces[] = $publication->annonce;
            }

            if ($publication->information) {
                $informations[] = $publication->information;
            }
        }

        // Passer les tableaux d'annonces et d'informations à la vue
        return view('users.mesPublications', compact('annonces', 'informations'));
    }
}