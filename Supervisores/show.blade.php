@extends('layout')

@section('title', 'Detalle del Supervisor')

@section('content')
    <h1>Detalle del Supervisor</h1>

    <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <p class="form-control">{{ $supervisor->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <p class="form-control">{{ $supervisor->Email }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Usuario de Inicio:</label>
        <p class="form-control">{{ $supervisor->inicio->nombreUsuario }}</p>
    </div>

    <a href="{{ route('supervisores.index') }}" class="btn btn-primary">Volver</a>
@endsection
