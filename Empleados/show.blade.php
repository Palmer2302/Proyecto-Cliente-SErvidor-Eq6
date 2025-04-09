<!-- resources/views/empleados/show.blade.php -->
@extends('layout')

@section('title', 'Detalle del Empleado')

@section('content')
    <h1>Detalle del Empleado</h1>

    <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <p class="form-control">{{ $empleado->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <p class="form-control">{{ $empleado->Email }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Usuario de Inicio:</label>
        <p class="form-control">{{ $empleado->inicio->nombreUsuario }}</p>
    </div>

    <a href="{{ route('empleados.index') }}" class="btn btn-primary">Volver</a>
@endsection
