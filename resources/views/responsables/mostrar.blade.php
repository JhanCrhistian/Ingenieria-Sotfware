@extends('layouts.app')

@section('content')
    <h1>Responsables</h1>
    <a href="{{ route('responsables.create') }}" class="btn btn-primary mb-3">Crear Responsable</a>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($responsables as $responsable)
                <tr>
                    <td>{{ $responsable->nombre }}</td>
                    <td>{{ $responsable->apellidos }}</td>
                    <td>
                        <a href="{{ route('responsables.edit', $responsable->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('responsables.destroy', $responsable->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
