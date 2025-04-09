@extends('layout')

@section('title', 'Roles')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Roles</h1>
        <a href="{{ route('roles.create') }}" class="btn btn-primary">Agregar Rol</a>
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
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $rol)
                <tr>
                    <td>{{ $rol->idRol }}</td>
                    <td>{{ $rol->Nombre }}</td>
                    <td>{{ $rol->Descripcion }}</td>
                    <td>
                        <a href="{{ route('roles.show', $rol->idRol) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('roles.edit', $rol->idRol) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('roles.destroy', $rol->idRol) }}" method="POST" class="d-inline">
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
