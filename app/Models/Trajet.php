<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

    protected $fillable = [
        'Lieu', 
        'Arrivee',
        'Prix',
        'Date', 
        'Heure', 
        'lignes_id',
    ];

    public function lignes(): BelongsTo
    {
        return $this->belongsTo(Lignes::class);
    }
}
