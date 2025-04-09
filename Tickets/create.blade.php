@extends('layout')

@section('title', 'Crear Ticket')

@section('content')
    <h1>Crear Ticket</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="idEmpleado" class="form-label">Empleado</label>
            <select name="idEmpleado" id="idEmpleado" class="form-select">
                @foreach($empleados as $empleado)
                    <option value="{{ $empleado->idEmpleado }}">{{ $empleado->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="emisionTicket" class="form-label">Fecha de Emisión</label>
            <input type="datetime-local" name="emisionTicket" id="emisionTicket" class="form-control" value="{{ old('emisionTicket') }}">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
