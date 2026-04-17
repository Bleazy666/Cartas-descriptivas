@extends('layouts.app')
@section('content')

<div class="table-container container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2>Lista de Incidencias</h2>
        </div>
        <div>
            <button class="btn btn-primary me-2 deco">
            <i class="bi bi-plus-lg"></i>
            <span><a href="{{ route('incidencias.create') }}" class="">Nueva Incidencia</a></span>   
            </button>
        </div>
    </div>

    
    <table border="1">
        <thead class="table table-bordered">
            <tr>
                <th>Alumno</th>
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Fecha</th>
            </tr>
        </thead>

        <tbody>
            @foreach($incidencias as $incidencia)
            <tr>
                <td>{{ $incidencia->alumno->nombre}}</td>
                <td>{{ $incidencia->tipo->nombre}}</td>
                <td>{{ $incidencia->descripcion}}</td>
                <td>{{ $incidencia->fecha}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection