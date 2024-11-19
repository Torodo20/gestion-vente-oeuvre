<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   // Affiche le formulaire de connexion
   public function create()
   {
       return view('auth.login'); // Assurez-vous que le fichier auth/login.blade.php existe
   }

   // Gère la soumission du formulaire de connexion
   public function store(Request $request)
   {
       // Valider les données du formulaire
       $request->validate([
           'email' => 'required|email',
           'password' => 'required'
       ]);

       // Tentative de connexion
       if (Auth::attempt($request->only('email', 'password'))) {
        $user = Auth::user();
        
        // Vérification si l'utilisateur est l'admin
        if ($user->email === 'aichatorodo@icloud.com') {  // Remplacez par l'email spécifique de l'admin
            return redirect()->route('admin.dash'); // Redirection vers le dashboard admin
        }
// Redirection en fonction du rôle de l'utilisateur
if ($user->role === 'Artiste' || $user->role === 'artiste') {
    return redirect()->route('artistes.profil');  // Route pour le profil artiste
} 
else {
    return redirect()->route('welcome');  // Redirection vers la page d'accueil
}
       }

       // Si la connexion échoue, redirection vers la page de login avec un message d'erreur
       return back()->withErrors([
           'email' => 'Credentiels incorrects.',
       ]);
   }

   // Gère la déconnexion
   public function destroy()
   {
       Auth::logout();
       return redirect()->route('login');
   }
}
