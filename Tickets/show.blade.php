@extends('layout')

@section('title', 'Detalle del Ticket')

@section('content')
    <h1>Detalle del Ticket</h1>

    <div class="mb-3">
        <label class="form-label">Empleado:</label>
        <p class="form-control">{{ $ticket->empleado->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha de Emisión:</label>
        <p class="form-control">{{ $ticket->emisionTicket }}</p>
    </div>

    <a href="{{ route('tickets.index') }}" class="btn btn-primary">Volver</a>
@endsection
