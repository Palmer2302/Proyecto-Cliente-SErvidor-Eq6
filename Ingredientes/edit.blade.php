@extends('layout')

@section('title', 'Editar Ingrediente')

@section('content')
    <h1>Editar Ingrediente</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ingredientes.update', $ingrediente->idIngrediente) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre', $ingrediente->Nombre) }}">
        </div>
        <div class="mb-3">
            <label for="Cantidad" class="form-label">Cantidad</label>
            <input type="number" name="Cantidad" id="Cantidad" class="form-control" value="{{ old('Cantidad', $ingrediente->Cantidad) }}">
        </div>
        <div class="mb-3">
            <label for="Limite" class="form-label">Límite</label>
            <input type="number" name="Limite" id="Limite" class="form-control" value="{{ old('Limite', $ingrediente->Limite) }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
