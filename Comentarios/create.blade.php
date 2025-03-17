<!-- resources/views/comentarios/create.blade.php -->
@extends('layout')

@section('title', 'Crear Comentario')

@section('content')
    <h1>Crear Comentario</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comentarios.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="idEmpleado" class="form-label">Empleado</label>
            <select name="idEmpleado" id="idEmpleado" class="form-select">
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->idEmpleado }}">{{ $empleado->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="idPlatillo" class="form-label">Platillo</label>
            <select name="idPlatillo" id="idPlatillo" class="form-select">
                @foreach($platillos as $platillo)
                    <option value="{{ $platillo->idPlatillo }}">{{ $platillo->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Contenido" class="form-label">Contenido</label>
            <textarea name="Contenido" id="Contenido" class="form-control">{{ old('Contenido') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ r
