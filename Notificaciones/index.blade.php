@extends('layout')

@section('title', 'Notificaciones')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Notificaciones</h1>
        <a href="{{ route('notificaciones.create') }}" class="btn btn-primary">Agregar Notificación</a>
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
                <th>Supervisor</th>
                <th>Ingrediente</th>
                <th>Mensaje</th>
                <th>Leído</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notificaciones as $notificacion)
                <tr>
                    <td>{{ $notificacion->idNotificacion }}</td>
                    <td>{{ $notificacion->supervisor->Nombre }}</td>
                    <td>{{ $notificacion->ingrediente->Nombre }}</td>
                    <td>{{ $notificacion->Mensaje }}</td>
                    <td>{{ $notificacion->Read ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('notificaciones.show', $notificacion->idNotificacion) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('notificaciones.edit', $notificacion->idNotificacion) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('notificaciones.destroy', $notificacion->idNotificacion) }}" method="POST" class="d-inline">
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
