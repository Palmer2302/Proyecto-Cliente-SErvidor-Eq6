@extends('layout')

@section('title', 'Crear Pedido Platillo')

@section('content')
    <h1>Crear Pedido Platillo</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pedido_platillo.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="idPedido" class="form-label">Pedido</label>
            <select name="idPedido" id="idPedido" class="form-select">
                @foreach($pedidos as $pedido)
                    <option value="{{ $pedido->idPedido }}">{{ $pedido->idPedido }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="idPlatillo" class="form-label">Platillo</label>
            <select name="idPlatillo" id="idPlatillo" class="form-select">
                @foreach($platillos as $platillo)
                    <option value="{{ $platillo->idPlatillo }}">{{ $platillo->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('pedido_platillo.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
