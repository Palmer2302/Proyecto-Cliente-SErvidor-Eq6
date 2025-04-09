@extends('layout')

@section('title', 'Editar Supervisor')

@section('content')
    <h1>Editar Supervisor</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('supervisores.update', $supervisor->idSupervisor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{ old('Nombre', $supervisor->Nombre) }}">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" value="{{ old('Email', $supervisor->Email) }}">
        </div>
        <div class="mb-3">
            <label for="idInicio" class="form-label">Inicio</label>
            <select name="idInicio" id="idInicio" class="form-select">
                @foreach($inicios as $inicio)
                    <option value="{{ $inicio->idInicio }}" {{ $inicio->idInicio == $supervisor->idInicio ? 'selected' : '' }}>
                        {{ $inicio->nombreUsuario }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('supervisores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
