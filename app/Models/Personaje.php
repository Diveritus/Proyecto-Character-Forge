<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'raza',
        'clase',
        'puntos_de_golpe',
        'puntos_de_golpe_temporales',
        'trasfondo',
        'historia',
        'habilidades_especiales',
        'objetos_magico',
    ];

    public function characterStat()
    {
        return $this->hasOne(CharacterStat::class, 'character_id', 'id');
    }
}
