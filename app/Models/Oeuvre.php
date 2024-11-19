<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    protected $fillable = ['titre', 'description','type', 'image', 'prix', 'dimension', 'user_id', ];

    public function user() {
        return $this->belongsTo(User::class); // L'artiste qui a créé l'œuvre
    }

    public function details() {
        return $this->hasMany(Detail_commande::class, 'oeuvre_id');
    }
    
    use HasFactory;
}
