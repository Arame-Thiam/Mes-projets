<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lignes extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero', 
        'libelle',
        'image', 
        'lieu',
        'destination', 
    ];







    public function bus(): HasMany
    {
        return $this->hasMany(Bus::class);
    }
}
