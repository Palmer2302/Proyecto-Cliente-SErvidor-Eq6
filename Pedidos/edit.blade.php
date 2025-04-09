@extends('layout')

@section('title', 'Editar Pedido')

@section('content')
    <h1>Editar Pedido</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pedidos.update', $pedido->idPedido) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="idEmpleado" class="form-label">Empleado</label>
            <select name="idEmpleado" id="idEmpleado" class="form-select">
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->idEmpleado }}" {{ $empleado->idEmpleado == $pedido->idEmpleado ? 'selected' : '' }}>
                        {{ $empleado->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Precio" class="form-label">Precio</label>
            <input type="number" step="0.01" name="Precio" id="Precio" class="form-control" value="{{ old('Precio', $pedido->Precio) }}">
        </div>
        <div class="mb-3">
            <label for="crearAt" class="form-label">Fecha</label>
            <input type="datetime-local" name="crearAt" id="crearAt" class="form-control" value="{{ old('crearAt', $pedido->crearAt) }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
