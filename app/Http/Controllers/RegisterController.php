<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    // Gère la soumission du formulaire d'inscription (correspond à la méthode 'store' des ressources)
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirmed_password' => 'required|min:6',
            'role' => 'required|string|in:Acheteur,Artiste',
            ]);

        // Créer un nouvel utilisateur
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'confirmed_password' => bcrypt($validatedData['confirmed_password']),
            'role' => $validatedData['role'],
            ]);
            // Log in the user
            Auth::login($user);

        if (!$user) {
            return back()->withErrors(['error' => 'Échec de l\'enregistrement de l\'utilisateur.']);
        }

        //  Émettre l'événement Registered
        // event(new Registered($user));

        // Connecter l'utilisateur après l'inscription
        auth()->login($user);

       // Redirection en fonction du rôle de l'utilisateur
        if ($user->role === 'Artiste' || $user->role === 'artiste') {
            return redirect()->route('artistes.registart');  // Route pour le dashboard artiste
        } 
        else {
            return redirect()->route('welcome');  // Redirection vers la page d'accueil
        }

    }
}