<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permis extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero', 
        'description',
        'typepermis', 
        'datecration',
        'dateexpiration', 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
