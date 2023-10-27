<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;


    protected $fillable = [
        'numero',
        'image',
        'description', 
        'places',
        'etat',
        'lignes_id',
    ];

    public function lignes(): BelongsTo
    {
        return $this->belongsTo(Lignes::class);
    }
}
