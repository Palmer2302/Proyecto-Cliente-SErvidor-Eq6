<!-- resources/views/empleados/edit.blade.php -->
@extends('layout')

@section('title', 'Editar Empleado')

@section('content')
    <h1>Editar Empleado</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('empleados.update', $empleado->idEmpleado) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre', $empleado->Nombre) }}">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" value="{{ old('Email', $empleado->Email) }}">
        </div>
        <div class="mb-3">
            <label for="Contraseña" class="form-label">Contraseña</label>
            <input type="password" name="Contraseña" id="Contraseña" class="form-control">
            <small class="form-text text-muted">Dejar en blanco si no deseas cambiar la contraseña.</small>
        </div>
        <div class="mb-3">
            <label for="idInicio" class="form-label">Inicio</label>
            <select name="idInicio" id="idInicio" class="form-select">
                @foreach($inicios as $inicio)
                    <option value="{{ $inicio->idInicio }}" {{ $inicio->idInicio == $empleado->idInicio ? 'selected' : '' }}>
                        {{ $inicio->nombreUsuario }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
