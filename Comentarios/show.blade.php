<!-- resources/views/comentarios/show.blade.php -->
@extends('layout')

@section('title', 'Detalle del Comentario')

@section('content')
    <h1>Detalle del Comentario</h1>

    <div class="mb-3">
        <label class="form-label">Empleado:</label>
        <p class="form-control">{{ $comentario->empleado->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Platillo:</label>
        <p class="form-control">{{ $comentario->platillo->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Contenido:</label>
        <p class="form-control">{{ $comentario->Contenido }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha de Creación:</label>
        <p class="form-control">{{ $comentario->crearAT }}</p>
    </div>

    <a href="{{ route('comentarios.index') }}" class="btn btn-primary">Volver</a>
@endsection
