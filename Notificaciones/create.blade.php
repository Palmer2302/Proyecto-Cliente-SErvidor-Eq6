@extends('layout')

@section('title', 'Crear Notificación')

@section('content')
    <h1>Crear Notificación</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('notificaciones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="idSupervisor" class="form-label">Supervisor</label>
            <select name="idSupervisor" id="idSupervisor" class="form-select">
                @foreach($supervisores as $supervisor)
                    <option value="{{ $supervisor->idSupervisor }}">{{ $supervisor->Nombre }}</option>
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
        <div class="mb-3">
            <label for="Mensaje" class="form-label">Mensaje</label>
            <textarea name="Mensaje" id="Mensaje" class="form-control">{{ old('Mensaje') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="Read" class="form-label">Leído</label>
            <select name="Read" id="Read" class="form-select">
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('notificaciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
