@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12 mt-3"> 
        <h2>Detalles del Personaje</h2>
    </div>
    <div class="col-12 ">
        <a href="{{ route('personajes.index') }}" class="btn btn-primary">Volver</a>
    </div>
    <div class="col-12 mt-2">
        <p><strong>Nombre:</strong> {{ $personaje->nombre }}</p>
        <p><strong>Raza:</strong> {{ $personaje->raza }}</p>
        <p><strong>Clase:</strong> {{ $personaje->clase }}</p>
        <p><strong>Puntos de Golpe:</strong> {{ $personaje->puntos_de_golpe }}</p>
        <p><strong>Puntos de Golpe Temporales:</strong> {{ $personaje->puntos_de_golpe_temporales }}</p>
        <p><strong>Trasfondo:</strong> {{ $personaje->trasfondo }}</p>
        <p><strong>Historia:</strong> {{ $personaje->historia }}</p>
        <p><strong>Habilidades Especiales:</strong> {{ $personaje->habilidades_especiales }}</p>
        <p><strong>Objetos Mágicos:</strong> {{ $personaje->objetos_magico }}</p>
    </div>
</div>
@endsection
