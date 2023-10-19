@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Personaje</h2>
        </div>
        <div>
            <a href="{{ route('personajes.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <strong>¡Oops!</strong> Hubo un problema:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personajes.store') }}" method="POST">
        @csrf <!-- Agrega el token CSRF -->
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ old('nombre') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Raza:</strong>
                    <input type="text" name="raza" class="form-control" placeholder="Raza" value="{{ old('raza') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Clase:</strong>
                    <input type="text" name= "clase" class="form-control" placeholder="Clase" value="{{ old('clase') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Puntos de Golpe:</strong>
                    <input type="number" name="puntos_de_golpe" class="form-control" placeholder="Puntos de Golpe" value="{{ old('puntos_de_golpe') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Puntos de Golpe Temporales:</strong>
                    <input type="number" name="puntos_de_golpe_temporales" class="form-control" placeholder="Puntos de Golpe Temporales" value="{{ old('puntos_de_golpe_temporales') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>Trasfondo:</strong>
                    <input type="text" name="trasfondo" class="form-control" placeholder="Trasfondo" value="{{ old('text') }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Historia:</strong>
                    <textarea name="historia" class="form-control" rows="5" placeholder="Historia">{{ old('historia') }}</textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Habilidades Especiales:</strong>
                    <textarea name="habilidades_especiales" class="form-control" rows="5" placeholder="Habilidades Especiales">{{ old('habilidades_especiales') }}</textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Objetos Mágicos:</strong>
                    <textarea name="objetos_magico" class="form-control" rows="5" placeholder="Objetos Mágicos">{{ old('objetos_magico') }}</textarea>
                </div>
            </div>
            
            <div class="col-12 mt-2 text-center">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection