<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Affiche une liste des utilisateurs (optionnel si nécessaire)
    public function index()
    {
        // Vous pouvez filtrer ici selon les rôles 'acheteur' et 'artiste'
        $users = User::whereIn('role', ['artiste', 'acheteur'])->get();
        return view('users.index', compact('users'));
    }

    // Montre un utilisateur spécifique
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Modifie le rôle de l'utilisateur
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // Mise à jour des rôles utilisateurs
    public function update(Request $request, $id)
    {
        $request->validate([
            'role' => 'required|string|in:acheteur,artiste',
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('users.show', $user->id)->with('success', 'Le rôle de l\'utilisateur a été mis à jour avec succès.');
    }
}
