<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;


    protected $fillable = [
        'description', 
        'NombrePlaces',
    ];

    public function lignes(): BelongsTo
    {
        return $this->belongsTo(Lignes::class);
    }
}
