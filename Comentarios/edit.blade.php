<!-- resources/views/comentarios/edit.blade.php -->
@extends('layout')

@section('title', 'Editar Comentario')

@section('content')
    <h1>Editar Comentario</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comentarios.update', $comentario->idComentario) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="idEmpleado" class="form-label">Empleado</label>
            <select name="idEmpleado" id="idEmpleado" class="form-select">
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->idEmpleado }}" {{ $empleado->idEmpleado == $comentario->idEmpleado ? 'selected' : '' }}>
                        {{ $empleado->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="idPlatillo" class="form-label">Platillo</label>
            <select name="idPlatillo" id="idPlatillo" class="form-select">
                @foreach($platillos as $platillo)
                    <option value="{{ $platillo->idPlatillo }}" {{ $platillo->idPlatillo == $comentario->idPlatillo ? 'selected' : '' }}>
                        {{ $platillo->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Contenido" class="form-label">Contenido</label>
            <textarea name="Contenido" id="Contenido" class="form-control">{{ old('Contenido', $comentario->Contenido) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('comentarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
