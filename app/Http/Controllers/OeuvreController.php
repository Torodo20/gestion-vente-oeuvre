<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oeuvre;

class OeuvreController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //Peinture
    public function showPeintures(Request $request)
    {
        $type = $request->query('type'); // Par défaut, on affiche toutes les peintures

        if ($type) {
            // Afficher toutes les peintures
            $oeuvres = Oeuvre::where('type', 'peinture')->get();
        } else {
            // Filtrer par type spécifique (pop art, abstraite, paysage, street art, à huile, portrait)
            $oeuvres = Oeuvre::where('type', $type)->get();
        }

          // Retourne la vue avec les œuvres filtrées et le type (s'il existe)
        return view('oeuvres.peinture', compact('oeuvres', 'type'));
    }
    public function index()
    {   // Récupérer uniquement les œuvres avec les IDs spécifiés
        $oeuvres = Oeuvre::with('user')->whereIn('id', [1, 3, 5, 7])->get();
        return view('welcome', compact('oeuvres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
     // Afficher les détails d'une oeuvre
    public function show($id) {
        $oeuvre = Oeuvre::with('user')->findOrFail($id);
        return view('oeuvres.show', compact('oeuvre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
