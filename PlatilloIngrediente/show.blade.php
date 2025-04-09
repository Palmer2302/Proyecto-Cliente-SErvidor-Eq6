@extends('layout')

@section('title', 'Detalle del Platillo Ingrediente')

@section('content')
    <h1>Detalle del Platillo Ingrediente</h1>

    <div class="mb-3">
        <label class="form-label">Platillo:</label>
        <p class="form-control">{{ $platilloIngrediente->platillo->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Ingrediente:</label>
        <p class="form-control">{{ $platilloIngrediente->ingrediente->Nombre }}</p>
    </div>

    <a href="{{ route('platillo_ingrediente.index') }}" class="btn btn-primary">Volver</a>
@endsection
