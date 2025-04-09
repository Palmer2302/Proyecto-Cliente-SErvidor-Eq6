@extends('layout')

@section('title', 'Editar Inicio')

@section('content')
    <h1>Editar Inicio</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('inicios.update', $inicio->idInicio) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
            <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" value="{{ old('nombreUsuario', $inicio->nombreUsuario) }}">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" value="{{ old('Email', $inicio->Email) }}">
        </div>
        <div class="mb-3">
            <label for="Contraseña" class="form-label">Contraseña</label>
            <input type="password" name="Contraseña" id="Contraseña" class="form-control">
            <small class="form-text text-muted">Dejar en blanco si no deseas cambiar la contraseña.</small>
        </div>
        <div class="mb-3">
            <label for="idRol" class="form-label">Rol</label>
            <select name="idRol" id="idRol" class="form-select">
                @foreach($roles as $rol)
                    <option value="{{ $rol->idRol }}" {{ $rol->idRol == $inicio->idRol ? 'selected' : '' }}>
                        {{ $rol->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('inicios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
