@extends('layouts.app')
@section('content')

    <div class="table-container container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h1>Lista de grupos</h1>
            </div>

            <div>
                <button class="btn btn-primary me-2 deco" >
                    <i class="bi bi-plus-lg"></i>
                    <span><a href="/grupos/create">Crear nuevo grupo</a></span>
                </button>
                <button class="btn btn-outline-secondary">
                    <i class="bi bi-upload"> Importar Lista</i>
                </button>
            </div>
        </div>
        
        <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($grupos as $grupo)
            <tr>
                <td>{{ $grupo->nombre}}</td>
                <td>
                    <a href="/grupos/{{ $grupo->id }}/edit"><i class="bi bi-pencil"></i></a>
                    <form action="/grupos/{{ $grupo->id }}" method="POST" style="display:inline;">
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