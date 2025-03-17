@extends('layout')

@section('title', 'Crear Platillo')

@section('content')
    <h1>Crear Platillo</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('platillos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre') }}">
        </div>
        <div class="mb-3">
            <label for="Descripcion" class="form-label">Descripción</label>
            <textarea name="Descripcion" id="Descripcion" class="form-control">{{ old('Descripcion') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="Precio" class="form-label">Precio</label>
            <input type="number" step="0.01" name="Precio" id="Precio" class="form-control" value="{{ old('Precio') }}">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('platillos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
