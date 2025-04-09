@extends('layout')

@section('title', 'Editar Reservación')

@section('content')
    <h1>Editar Reservación</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservaciones.update', $reservacion->idReservacion) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="idEmpleado" class="form-label">Empleado</label>
            <select name="idEmpleado" id="idEmpleado" class="form-select">
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->idEmpleado }}" {{ $empleado->idEmpleado == $reservacion->idEmpleado ? 'selected' : '' }}>
                        {{ $empleado->Nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="Dia" class="form-label">Día</label>
            <input type="date" name="Dia" id="Dia" class="form-control" value="{{ old('Dia', $reservacion->Dia) }}">
        </div>
        <div class="mb-3">
            <label for="Hora" class="form-label">Hora</label>
            <input type="time" name="Hora" id="Hora" class="form-control" value="{{ old('Hora', $reservacion->Hora) }}">
        </div>
        <div class="mb-3">
            <label for="nComensales" class="form-label">Número de Comensales</label>
            <input type="number" name="nComensales" id="nComensales" class="form-control" value="{{ old('nComensales', $reservacion->nComensales) }}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="{{ route('reservaciones.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
