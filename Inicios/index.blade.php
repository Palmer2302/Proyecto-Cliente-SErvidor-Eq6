@extends('layout')

@section('title', 'Inicios')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Inicios</h1>
        <a href="{{ route('inicios.create') }}" class="btn btn-primary">Agregar Inicio</a>
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
                <th>Usuario</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inicios as $inicio)
                <tr>
                    <td>{{ $inicio->idInicio }}</td>
                    <td>{{ $inicio->nombreUsuario }}</td>
                    <td>{{ $inicio->Email }}</td>
                    <td>{{ $inicio->rol->Nombre }}</td>
                    <td>
                        <a href="{{ route('inicios.show', $inicio->idInicio) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('inicios.edit', $inicio->idInicio) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('inicios.destroy', $inicio->idInicio) }}" method="POST" class="d-inline">
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
