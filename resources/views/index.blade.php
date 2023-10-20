@extends('adminlte::page')

@section('title', 'Personajes')

@section('content_header')
    <h1>Personajes</h1>
@stop

@section('content')
@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <a href="{{ route('personajes.create') }}" class="btn btn-primary">Crear</a>
        </div>
    </div>


    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Éxito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-4">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Clase</th>
                    <th>Raza</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personajes as $personaje)
                    <tr>
                        <td>{{ $personaje->nombre }}</td>
                        <td>{{ $personaje->clase }}</td>
                        <td>{{ $personaje->raza }}</td>
                        <td>
                            <a href="{{ route('personajes.edit', $personaje->id) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('personajes.show', $personaje->id) }}" class="btn btn-info">Detalles</a>
                            <form action="{{ route('personajes.destroy', $personaje) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger delete-btn" data-personaje-id="{{ $personaje->id }}" data-personaje-nombre="{{ $personaje->nombre }}">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script>
        $(document).ready(function() {
            @if(Session::has('success'))
                $('#successModal').modal('show');
            @endif

            $(document).on('click', '.delete-btn', function () {
                var personajeId = $(this).data('personaje-id');
                var personajeNombre = $(this).data('personaje-nombre');
                $('#confirmDeleteModal').modal('show');
                $('#confirmDeleteModal .modal-body').html('¿Estás seguro de que deseas eliminar a ' + personajeNombre + '?');
                $('#deletePersonajeForm').attr('action', '{{ route('personajes.destroy', '') }}/' + personajeId);
            });
        });
    </script>

    
@stop