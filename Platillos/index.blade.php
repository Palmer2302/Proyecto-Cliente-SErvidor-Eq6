@extends('layout')

@section('title', 'Platillos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Platillos</h1>
        <a href="{{ route('platillos.create') }}" class="btn btn-primary">Agregar Platillo</a>
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
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($platillos as $platillo)
                <tr>
                    <td>{{ $platillo->idPlatillo }}</td>
                    <td>{{ $platillo->Nombre }}</td>
                    <td>{{ $platillo->Descripcion }}</td>
                    <td>{{ $platillo->Precio }}</td>
                    <td>
                        <a href="{{ route('platillos.show', $platillo->idPlatillo) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('platillos.edit', $platillo->idPlatillo) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('platillos.destroy', $platillo->idPlatillo) }}" method="POST" class="d-inline">
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
