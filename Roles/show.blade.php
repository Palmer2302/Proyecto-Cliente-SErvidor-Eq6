@extends('layout')

@section('title', 'Detalle del Rol')

@section('content')
    <h1>Detalle del Rol</h1>

    <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <p class="form-control">{{ $rol->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción:</label>
        <p class="form-control">{{ $rol->Descripcion }}</p>
    </div>

    <a href="{{ route('roles.index') }}" class="btn btn-primary">Volver</a>
@endsection
