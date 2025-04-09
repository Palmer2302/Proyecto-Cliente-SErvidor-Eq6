@extends('layout')

@section('title', 'Crear Inicio')

@section('content')
    <h1>Crear Inicio</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('inicios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
            <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" value="{{ old('nombreUsuario') }}">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" value="{{ old('Email') }}">
        </div>
        <div class="mb-3">
            <label for="Contraseña" class="form-label">Contraseña</label>
            <input type="password" name="Contraseña" id="Contraseña" class="form-control">
        </div>
        <div class="mb-3">
            <label for="idRol" class="form-label">Rol</label>
            <select name="idRol" id="idRol" class="form-select">
                @foreach($roles as $rol)
                    <option value="{{ $rol->idRol }}">{{ $rol->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('inicios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
