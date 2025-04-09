@extends('layout')

@section('title', 'Reservaciones')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Reservaciones</h1>
        <a href="{{ route('reservaciones.create') }}" class="btn btn-primary">Agregar Reservación</a>
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
                <th>Día</th>
                <th>Hora</th>
                <th>Número de Comensales</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservaciones as $reservacion)
                <tr>
                    <td>{{ $reservacion->idReservacion }}</td>
                    <td>{{ $reservacion->empleado->Nombre }}</td>
                    <td>{{ $reservacion->Dia }}</td>
                    <td>{{ $reservacion->Hora }}</td>
                    <td>{{ $reservacion->nComensales }}</td>
                    <td>
                        <a href="{{ route('reservaciones.show', $reservacion->idReservacion) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('reservaciones.edit', $reservacion->idReservacion) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('reservaciones.destroy', $reservacion->idReservacion) }}" method="POST" class="d-inline">
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
