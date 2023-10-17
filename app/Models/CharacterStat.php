<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'fuerza',
        'destreza',
        'constitucion',
        'inteligencia',
        'sabiduria',
        'carisma',
    ];
    
    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'id', 'character_id');
    }
}
