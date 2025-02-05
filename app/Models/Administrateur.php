<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;

    protected $table = 'administrateurs';

    protected $fillable = [
        'nom',
        'prenom',
        'num_de_matriculation',
        'cin',
        'role',
    ];
}
