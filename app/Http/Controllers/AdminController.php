<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Oeuvre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Vérifier que seul l'admin peut accéder aux fonctions
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // Vérification de l'email spécifique de l'admin
            if (Auth::check() && Auth::user()->email === 'aichatorodo@icloud.com') {
                return $next($request);
            }
            return redirect()->route('login')->withErrors(['access' => 'Accès réservé à l\'administrateur.']);
        });
    }

    // Afficher le tableau de bord admin
    public function dash()
    {
        return view('admin.dash');
    }

     // Lister tous les artistes
    public function listArtistes()
    {
        $artistes = User::where('role', 'artiste')->get();
        return view('admin.artistes.index', compact('artistes'));
    }
    
     // Créer un nouvel artiste
    public function createArtiste()
    {
        return view('admin.artistes.create');
    }

    public function storeArtiste(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'artiste',
        ]);

        return redirect()->route('admin.artistes.index')->with('success', 'Artiste créé avec succès.');
    }
    
     // Afficher un artiste spécifique
    public function showArtiste($id)
    {
        $artiste = User::where('role', 'artiste')->findOrFail($id);
        return view('admin.artistes.show', compact('artiste'));
    }

     // Éditer un artiste
    public function editArtiste($id)
    {
        $artiste = User::where('role', 'artiste')->findOrFail($id);
        return view('admin.artistes.edit', compact('artiste'));
    }

    public function updateArtiste(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $artiste = User::where('role', 'artiste')->findOrFail($id);
        $artiste->update($request->only('name', 'email'));

        return redirect()->route('admin.artistes.index')->with('success', 'Artiste mis à jour avec succès.');
    }

     // Supprimer un artiste
    public function deleteArtiste($id)
    {
        $artiste = User::where('role', 'artiste')->findOrFail($id);
        $artiste->delete();

        return redirect()->route('admin.artistes.index')->with('success', 'Artiste supprimé avec succès.');
    }
//POUR LES OEUVRES
    // Lister toutes les œuvres
    public function listOeuvres()
    {
        $oeuvres = Oeuvre::all();
        return view('admin.oeuvres.index', compact('oeuvres'));
    }

    // Créer une nouvelle œuvre
    public function createOeuvre()
    {
        return view('admin.oeuvres.create');
    }

    public function storeOeuvre(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Oeuvre::create($request->all());

        return redirect()->route('admin.oeuvres.index')->with('success', 'Oeuvre créée avec succès.');
    }

    // Afficher une œuvre spécifique
    public function showOeuvre($id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        return view('admin.oeuvres.show', compact('oeuvre'));
    }

    // Éditer une œuvre
    public function editOeuvre($id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        return view('admin.oeuvres.edit', compact('oeuvre'));
    }

    public function updateOeuvre(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $oeuvre = Oeuvre::findOrFail($id);
        $oeuvre->update($request->only('titre', 'description'));

        return redirect()->route('admin.oeuvres.index')->with('success', 'Oeuvre mise à jour avec succès.');
    }

    // Supprimer une œuvre
    public function deleteOeuvre($id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        $oeuvre->delete();

        return redirect()->route('admin.oeuvres.index')->with('success', 'Oeuvre supprimée avec succès.');
    }
//Pour les Acheteurs
    public function index()
    {
        $acheteurs = User::where('role', 'acheteur')->get();
        return view('admin.acheteurs.index', compact('acheteurs'));
    }


    // Afficher le formulaire pour créer un nouvel acheteur
    public function create()
    {
        return view('admin.acheteurs.create');
    }

    // Enregistrer un nouvel acheteur
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'nullable|string',
            'role' => 'nullable|string',
            'address' => 'nullable|string',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'acheteur',
            'phone_number' => $request->phone_number,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.acheteurs.index')->with('success', 'Acheteur créé avec succès.');
    }
// Afficher le formulaire d'édition d'un acheteur
    public function edit($id)
    {
        $acheteur = User::findOrFail($id);
        return view('admin.acheteurs.edit', compact('acheteur'));
    }

    // Mettre à jour les informations d'un acheteur
    public function update(Request $request, $id)
    {
        $acheteur = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $acheteur->id,
            'phone_number' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        $acheteur->update($request->only('name', 'email', 'phone_number', 'address'));

        return redirect()->route('admin.acheteurs.index')->with('success', 'Acheteur mis à jour avec succès.');
    }

    // Supprimer un acheteur
    public function destroy($id)
    {
        $acheteur = User::findOrFail($id);
        $acheteur->delete();

        return redirect()->route('admin.acheteurs.index')->with('success', 'Acheteur supprimé avec succès.');
    }
}
