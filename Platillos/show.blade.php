@extends('layout')

@section('title', 'Detalle del Platillo')

@section('content')
    <h1>Detalle del Platillo</h1>

    <div class="mb-3">
        <label class="form-label">Nombre:</label>
        <p class="form-control">{{ $platillo->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Descripción:</label>
        <p class="form-control">{{ $platillo->Descripcion }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Precio:</label>
        <p class="form-control">{{ $platillo->Precio }}</p>
    </div>

    <a href="{{ route('platillos.index') }}" class="btn btn-primary">Volver</a>
@endsection
