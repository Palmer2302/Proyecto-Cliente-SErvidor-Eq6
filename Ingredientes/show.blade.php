@extends('layout')

@section('title', 'Detalle del Ingrediente')

@section('content')
    <h1>Detalle del Ingrediente</h1>

    <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <p class="form-control">{{ $ingrediente->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Cantidad:</label>
        <p class="form-control">{{ $ingrediente->Cantidad }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Límite:</label>
        <p class="form-control">{{ $ingrediente->Limite }}</p>
    </div>

    <a href="{{ route('ingredientes.index') }}" class="btn btn-primary">Volver</a>
@endsection
