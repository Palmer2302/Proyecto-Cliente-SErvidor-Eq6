@extends('layout')

@section('title', 'Detalle de la Reservación')

@section('content')
    <h1>Detalle de la Reservación</h1>

    <div class="mb-3">
        <label class="form-label">Empleado:</label>
        <p class="form-control">{{ $reservacion->empleado->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Día:</label>
        <p class="form-control">{{ $reservacion->Dia }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Hora:</label>
        <p class="form-control">{{ $reservacion->Hora }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Número de Comensales:</label>
        <p class="form-control">{{ $reservacion->nComensales }}</p>
    </div>

    <a href="{{ route('reservaciones.index') }}" class="btn btn-primary">Volver</a>
@endsection
