<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdreMission extends Model
{
    use HasFactory;

    protected $table = 'ordre_mission';

    protected $fillable = [
        'dateDebut',
        'dateArrive',
        'dateFin',
        'transport',
        'destination',
        'objectif',
        'idUtilisateur',
        'etatRemboursement',
    ];


    // Define the relationship to Fonctionnaire
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'idUtilisateur');
    }
}
