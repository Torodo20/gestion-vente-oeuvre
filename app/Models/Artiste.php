<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'date_naissance',
        'lieu_naissance',
        'telephone',
        'description',
        'parcours',
        'user_id',
    ];
    /**
     * Relation avec le modèle User.
     * Un artiste appartient à un utilisateur.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    /**
     * Relation avec le modèle Oeuvre.
     * Un artiste peut avoir plusieurs œuvres.
     */
    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class);
    }
}
