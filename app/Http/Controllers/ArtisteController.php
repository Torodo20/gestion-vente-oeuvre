<?php

namespace App\Http\Controllers;
use App\Models\Artiste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtisteController extends Controller
{
 // Formulaire pour enregistrer un artiste
    public function create()
    {
        return view('artistes.registart'); // Affiche le formulaire d'inscription
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'date_naissance' => 'nullable|date',
            'lieu_naissance' => 'nullable|string|max:255',
            'telephone' => 'nullable|string|max:15',
            'description' => 'nullable|string',
            'parcours' => 'nullable|string',
        ]);

       // Crée un artiste lié à l'utilisateur authentifié
        $artiste = new Artiste([
        'nom' => $validatedData['nom'],
        'date_naissance' => $validatedData['date_naissance'],
        'lieu_naissance' => $validatedData['lieu_naissance'],
        'telephone' => $validatedData['telephone'],
        'description' => $validatedData['description'],
        'parcours' => $validatedData['parcours'],
        'user_id' => Auth::id() // Lier l'artiste à l'utilisateur authentifié
    ]);
    
    // Sauvegarde l'artiste dans la base de données
    if (!$artiste->save()) {
        return back()->withErrors(['error' => 'Échec de l\'enregistrement de l\'artiste.']);
    }
}

    public function artbord()
    {  
        $artiste = Auth::check() ? Artiste::where('user_id', Auth::id())->first() : null;
        return view('artistes.profil', compact('artiste'));
    }

    public function show($id)
    {
    $artiste = Artiste::with('oeuvres')->findOrFail($id); // Assure-toi que tu as la relation avec les œuvres
    return view('artistes.profil', compact('artiste'));
    }
}
