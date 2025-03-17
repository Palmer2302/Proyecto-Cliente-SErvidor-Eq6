<!-- resources/views/comentarios/index.blade.php -->
@extends('layout')

@section('title', 'Comentarios')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Comentarios</h1>
        <a href="{{ route('comentarios.create') }}" class="btn btn-primary">Agregar Comentario</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Empleado</th>
                <th>Platillo</th>
                <th>Contenido</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comentarios as $comentario)
                <tr>
                    <td>{{ $comentario->idComentario }}</td>
                    <td>{{ $comentario->empleado->Nombre }}</td>
                    <td>{{ $comentario->platillo->Nombre }}</td>
                    <td>{{ $comentario->Contenido }}</td>
                    <td>{{ $comentario->crearAT }}</td>
                    <td>
                        <a href="{{ route('comentarios.show', $comentario->idComentario) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('comentarios.edit', $comentario->idComentario) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('comentarios.destroy', $comentario->idComentario) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
