@extends('layout')

@section('title', 'Detalle del Pedido')

@section('content')
    <h1>Detalle del Pedido</h1>

    <div class="mb-3">
        <label class="form-label">Empleado:</label>
        <p class="form-control">{{ $pedido->empleado->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Precio:</label>
        <p class="form-control">{{ $pedido->Precio }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha:</label>
        <p class="form-control">{{ $pedido->crearAt }}</p>
    </div>

    <a href="{{ route('pedidos.index') }}" class="btn btn-primary">Volver</a>
@endsection
