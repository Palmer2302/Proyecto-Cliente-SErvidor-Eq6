@extends('layout')

@section('title', 'Crear Ingrediente')

@section('content')
    <h1>Crear Ingrediente</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ingredientes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre') }}">
        </div>
        <div class="mb-3">
            <label for="Cantidad" class="form-label">Cantidad</label>
            <input type="number" name="Cantidad" id="Cantidad" class="form-control" value="{{ old('Cantidad') }}">
        </div>
        <div class="mb-3">
            <label for="Limite" class="form-label">Límite</label>
            <input type="number" name="Limite" id="Limite" class="form-control" value="{{ old('Limite') }}">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('ingredientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
