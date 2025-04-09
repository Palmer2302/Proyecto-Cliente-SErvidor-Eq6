@extends('layout')

@section('title', 'Detalle del Pedido Platillo')

@section('content')
    <h1>Detalle del Pedido Platillo</h1>

    <div class="mb-3">
        <label class="form-label">Pedido:</label>
        <p class="form-control">{{ $pedidoPlatillo->pedido->idPedido }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Platillo:</label>
        <p class="form-control">{{ $pedidoPlatillo->platillo->Nombre }}</p>
    </div>

    <a href="{{ route('pedido_platillo.index') }}" class="btn btn-primary">Volver</a>
@endsection
