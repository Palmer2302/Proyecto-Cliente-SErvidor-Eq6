@extends('layout')

@section('title', 'Pedidos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Pedidos</h1>
        <a href="{{ route('pedidos.create') }}" class="btn btn-primary">Agregar Pedido</a>
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
                <th>Precio</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->idPedido }}</td>
                    <td>{{ $pedido->empleado->Nombre }}</td>
                    <td>{{ $pedido->Precio }}</td>
                    <td>{{ $pedido->crearAt }}</td>
                    <td>
                        <a href="{{ route('pedidos.show', $pedido->idPedido) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('pedidos.edit', $pedido->idPedido) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('pedidos.destroy', $pedido->idPedido) }}" method="POST" class="d-inline">
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
