<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandes extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_demande', 
        'etat_demande',
        'montant_demande', 
        'type_paiement',
        'date_demande',
        'user_id',
        'lignes_id', 
    ];
}
