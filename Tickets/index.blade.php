@extends('layout')

@section('title', 'Tickets')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tickets</h1>
        <a href="{{ route('tickets.create') }}" class="btn btn-primary">Agregar Ticket</a>
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
                <th>Fecha de Emisión</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->idTicket }}</td>
                    <td>{{ $ticket->empleado->Nombre }}</td>
                    <td>{{ $ticket->emisionTicket }}</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->idTicket) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('tickets.edit', $ticket->idTicket) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('tickets.destroy', $ticket->idTicket) }}" method="POST" class="d-inline">
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
