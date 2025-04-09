@extends('layout')

@section('title', 'Pedido Platillo')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Pedido Platillo</h1>
        <a href="{{ route('pedido_platillo.create') }}" class="btn btn-primary">Agregar Pedido Platillo</a>
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
                <th>Pedido</th>
                <th>Platillo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidoPlatillos as $pedidoPlatillo)
                <tr>
                    <td>{{ $pedidoPlatillo->idIntermedio }}</td>
                    <td>{{ $pedidoPlatillo->pedido->idPedido }}</td>
                    <td>{{ $pedidoPlatillo->platillo->Nombre }}</td>
                    <td>
                        <a href="{{ route('pedido_platillo.show', $pedidoPlatillo->idIntermedio) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('pedido_platillo.edit', $pedidoPlatillo->idIntermedio) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('pedido_platillo.destroy', $pedidoPlatillo->idIntermedio) }}" method="POST" class="d-inline">
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
