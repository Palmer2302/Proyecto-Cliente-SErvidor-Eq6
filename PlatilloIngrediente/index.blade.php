@extends('layout')

@section('title', 'Platillo Ingrediente')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Platillo Ingrediente</h1>
        <a href="{{ route('platillo_ingrediente.create') }}" class="btn btn-primary">Agregar Platillo Ingrediente</a>
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
                <th>Platillo</th>
                <th>Ingrediente</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($platilloIngredientes as $platilloIngrediente)
                <tr>
                    <td>{{ $platilloIngrediente->idPlatillo_Ingrediente }}</td>
                    <td>{{ $platilloIngrediente->platillo->Nombre }}</td>
                    <td>{{ $platilloIngrediente->ingrediente->Nombre }}</td>
                    <td>
                        <a href="{{ route('platillo_ingrediente.show', $platilloIngrediente->idPlatillo_Ingrediente) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('platillo_ingrediente.edit', $platilloIngrediente->idPlatillo_Ingrediente) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('platillo_ingrediente.destroy', $platilloIngrediente->idPlatillo_Ingrediente) }}" method="POST" class="d-inline">
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
