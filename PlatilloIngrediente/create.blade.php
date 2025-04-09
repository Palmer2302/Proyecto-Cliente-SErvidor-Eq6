@extends('layout')

@section('title', 'Crear Platillo Ingrediente')

@section('content')
    <h1>Crear Platillo Ingrediente</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('platillo_ingrediente.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="idPlatillo" class="form-label">Platillo</label>
            <select name="idPlatillo" id="idPlatillo" class="form-select">
                @foreach($platillos as $platillo)
                    <option value="{{ $platillo->idPlatillo }}">{{ $platillo->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="idIngrediente" class="form-label">Ingrediente</label>
            <select name="idIngrediente" id="idIngrediente" class="form-select">
                @foreach($ingredientes as $ingrediente)
                    <option value="{{ $ingrediente->idIngrediente }}">{{ $ingrediente->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('platillo_ingrediente.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
