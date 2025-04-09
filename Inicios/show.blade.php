@extends('layout')

@section('title', 'Detalle del Inicio')

@section('content')
    <h1>Detalle del Inicio</h1>

    <div class="mb-3">
        <label class="form-label">Nombre de Usuario:</label>
        <p class="form-control">{{ $inicio->nombreUsuario }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <p class="form-control">{{ $inicio->Email }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Rol:</label>
        <p class="form-control">{{ $inicio->rol->Nombre }}</p>
    </div>

    <a href="{{ route('inicios.index') }}" class="btn btn-primary">Volver</a>
@endsection
