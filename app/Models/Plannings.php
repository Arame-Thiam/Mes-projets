<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Plannings extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'description', 
        'lieu',
        'destination', 
        'date',
        'heurs', 
        'user_id', 
        'lignes_id', 
    ];

    public function toSearchableArray(){
        $searchArray = [
            'lieu'=>$this->lieu,
            'destination'=>$this->destination,
        ];

        return $searchArray;
    }
}
