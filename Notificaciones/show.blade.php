@extends('layout')

@section('title', 'Detalle de la Notificación')

@section('content')
    <h1>Detalle de la Notificación</h1>

    <div class="mb-3">
        <label class="form-label">Supervisor:</label>
        <p class="form-control">{{ $notificacion->supervisor->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Ingrediente:</label>
        <p class="form-control">{{ $notificacion->ingrediente->Nombre }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Mensaje:</label>
        <p class="form-control">{{ $notificacion->Mensaje }}</p>
    </div>
    <div class="mb-3">
        <label class="form-label">Leído:</label>
        <p class="form-control">{{ $notificacion->Read ? 'Sí' : 'No' }}</p>
    </div>

    <a href="{{ route('notificaciones.index') }}" class="btn btn-primary">Volver</a>
@endsection
