@extends('layouts.app')
@section('content')

<div class="table-container container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>Alumnos y Grupos</h1>
        </div>
        <div>
            <button class="btn btn-primary me-2 deco">
                <i class="bi bi-plus-lg"></i>
                <span><a href="/alumnos/create">Registrar alumno</a></span>
            </button>
        </div>
    </div>

    <table border="1">

    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Matricula</th>
            <th>Grupo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->nombre}}</td>
            <td>{{ $alumno->apellido}}</td>
            <td>{{ $alumno->matricula}}</td>
            <td>{{ $alumno->grupo->nombre}}</td>

            <td>
                <a href="/alumnos/{{ $alumno->id }}/edit"><i class="bi bi-pencil"></i></a>

                <form action="/alumnos/{{ $alumno->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

    </table>
</div>
@endsection