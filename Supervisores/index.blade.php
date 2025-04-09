@extends('layout')

@section('title', 'Supervisores')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Supervisores</h1>
        <a href="{{ route('supervisores.create') }}" class="btn btn-primary">Agregar Supervisor</a>
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
                <th>Email</th>
                <th>Usuario de Inicio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supervisores as $supervisor)
                <tr>
                    <td>{{ $supervisor->idSupervisor }}</td>
                    <td>{{ $supervisor->Nombre }}</td>
                    <td>{{ $supervisor->Email }}</td>
                    <td>{{ $supervisor->inicio->nombreUsuario }}</td>
                    <td>
                        <a href="{{ route('supervisores.show', $supervisor->idSupervisor) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('supervisores.edit', $supervisor->idSupervisor) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('supervisores.destroy', $supervisor->idSupervisor) }}" method="POST" class="d-inline">
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
