@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalles del Personaje</h1>
@stop

@section('content')
@section('content')
<div class="row">
    
    <div class="col-12 mt-2">
        <a href="{{ route('personajes.index') }}" class="btn btn-primary btn-sm">
            <i class="fa fa-arrow-left"></i> Volver
        </a>
    </div>
    <div class="col-12 mt-2">
        <div class="card">
            <div class="card-body">
                
                <p class="card-text"><strong>Nombre:</strong> {{ $personaje->nombre }}</p>
                <p class="card-text"><strong>Raza:</strong> {{ $personaje->raza }}</p>
                <p class="card-text"><strong>Clase:</strong> {{ $personaje->clase }}</p>
                <p class="card-text"><strong>Puntos de Golpe:</strong> {{ $personaje->puntos_de_golpe }}</p>
                <p class="card-text"><strong>Puntos de Golpe Temporales:</strong> {{ $personaje->puntos_de_golpe_temporales }}</p>
                <p class="card-text"><strong>Trasfondo:</strong> {{ $personaje->trasfondo }}</p>
                <p class="card-text"><strong>Historia:</strong> {{ $personaje->historia }}</p>
                <p class="card-text"><strong>Habilidades Especiales:</strong> {{ $personaje->habilidades_especiales }}</p>
                <p class="card-text"><strong>Objetos Mágicos:</strong> {{ $personaje->objetos_magico }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
