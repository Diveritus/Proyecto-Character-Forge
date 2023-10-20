@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar Personaje</h1>
@stop

@section('content')
    @section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <a href="{{ route('personajes.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger mt-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> ¡Oops! Hubo un problema</h4>
                <p>Revise los campos antes de continuar</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        @if (Str::contains($error, 'field is required.'))
                            @php
                                $fieldName = str_replace(['The ', ' field is required.'], '', $error);
                            @endphp
                            <li> {{ $fieldName }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('personajes.update', ['personaje' => $personaje->id]) }}" method="POST">
            @csrf 
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <x-adminlte-input name="nombre" label="Nombre" placeholder="Nombre" label-class="fw-bold" value="{{ $personaje->nombre }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-lg fa-font"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <x-adminlte-input name="raza" label="Raza" placeholder="Raza" label-class="fw-bold" value='{{$personaje->raza}}'>
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-lg fa-flag"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <x-adminlte-input name="clase" label="Clase" placeholder="Clase" label-class="fw-bold" value="{{ $personaje->clase }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-lg fa-book"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <x-adminlte-input name="puntos_de_golpe" label="Puntos de Golpe" placeholder="Puntos de Golpe" label-class="fw-bold" type="number" value="{{ $personaje->puntos_de_golpe }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-lg fa-heart"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <x-adminlte-input name="puntos_de_golpe_temporales" label="Puntos de Golpe Temporales" placeholder="Puntos de Golpe Temporales" label-class="fw-bold" type="number" value="{{ $personaje->puntos_de_golpe_temporales }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-lg fa-heartbeat"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <x-adminlte-input name="trasfondo" label="Trasfondo" placeholder="Trasfondo" label-class="fw-bold" value="{{ $personaje->trasfondo }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-lg fa-scroll"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <strong>Historia:</strong>
                        <x-adminlte-textarea name="historia" class="form-control" rows="5" placeholder="Historia">{{ $personaje->historia }}</x-adminlte-textarea>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <strong>Habilidades Especiales:</strong>
                        <x-adminlte-textarea name="habilidades_especiales" class="form-control" rows="5" placeholder="Habilidades Especiales">{{ $personaje->habilidades_especiales }}</x-adminlte-textarea>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <strong>Objetos Mágicos:</strong>
                        <x-adminlte-textarea name="objetos_magico" class="form-control" rows="5" placeholder="Objetos Mágicos">{{ $personaje->objetos_magico }}</x-adminlte-textarea>
                    </div>
                </div>

                <div class="col-12 mt-2 text-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>
    </div>
    @endsection
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop