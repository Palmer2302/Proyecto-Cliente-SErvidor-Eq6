<!-- resources/views/empleados/index.blade.php -->
@extends('layout')

@section('title', 'Empleados')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Empleados</h1>
        <a href="{{ route('empleados.create') }}" class="btn btn-primary">Agregar Empleado</a>
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
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->idEmpleado }}</td>
                    <td>{{ $empleado->Nombre }}</td>
                    <td>{{ $empleado->Email }}</td>
                    <td>
                        <a href="{{ route('empleados.show', $empleado->idEmpleado) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('empleados.edit', $empleado->idEmpleado) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('empleados.destroy', $empleado->idEmpleado) }}" method="POST" class="d-inline">
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
