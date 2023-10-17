@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Creacion de Personaje</h2>
        </div>
        <div>
            <a href="{{ route('personajes.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>


    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{Session::get('success')}} <br>
            
        </div>
        
    @endif
    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Nombre</th>
                <th>Clase</th>
                <th>Raza</th>
                <th>Acción</th>
            </tr>
            @foreach ( $personajes as $personaje)
                <tr>
                    <td class="fw-bold">{{ $personaje->nombre }}</td>
                    <td>{{ $personaje->clase }}</td>
                    <td>{{ $personaje->raza }}</td>
                    <td>
                        <a href="{{ route('personajes.edit', $personaje->id) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('personajes.show', $personaje->id) }}" class="btn btn-info">Detalles</a>
        
                        <form action="" method="post" class="d-inline">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </table>
        
    </div>
</div>
@endsection