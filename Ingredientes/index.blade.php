@extends('layout')

@section('title', 'Ingredientes')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Ingredientes</h1>
        <a href="{{ route('ingredientes.create') }}" class="btn btn-primary">Agregar Ingrediente</a>
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
                <th>Cantidad</th>
                <th>Límite</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ingredientes as $ingrediente)
                <tr>
                    <td>{{ $ingrediente->idIngrediente }}</td>
                    <td>{{ $ingrediente->Nombre }}</td>
                    <td>{{ $ingrediente->Cantidad }}</td>
                    <td>{{ $ingrediente->Limite }}</td>
                    <td>
                        <a href="{{ route('ingredientes.show', $ingrediente->idIngrediente) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('ingredientes.edit', $ingrediente->idIngrediente) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('ingredientes.destroy', $ingrediente->idIngrediente) }}" method="POST" class="d-inline">
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
