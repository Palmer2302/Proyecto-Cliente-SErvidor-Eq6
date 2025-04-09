@extends('layout')

@section('title', 'Editar Ticket')

@section('content')
    <h1>Editar Ticket</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tickets.update', $ticket->idTicket) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="idEmpleado" class="form-label">Empleado</label>
            <select name="idEmpleado" id="idEmpleado" class="form-select">
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->idEmpleado }}" {{ $empleado->idEmpleado == $ticket->idEmpleado ? 'selected' : '' }}>
                        {{ $empleado->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="emisionTicket" class="form-label">Fecha de Emisión</label>
            <input type="datetime-local" name="emisionTicket" id="emisionTicket" class="form-control" value="{{ old('emisionTicket', $ticket->emisionTicket) }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
