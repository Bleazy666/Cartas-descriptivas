@extends('layouts.app')
@section('content')
<h1>Editar Alumno</h1>

    <form action="/alumnos/{{ $alumno->id }}" method="POST">

    @csrf
    @method('PUT')

    <label for="">Nombre</label>
    <input type="text" name="nombre" value="{{ $alumno->nombre }}">

    <br><br>

    <label for="">Apellidos</label>
    <input type="text" name="apellido" value="{{ $alumno->apellido }}">

    <br><br>

    <label for="">Matricula</label>
    <input type="text" name="matricula" value="{{ $alumno->matricula }}">

    <br><br>

    <label for="">Grupo</label>
    <select name="grupo_id" id="">

        @foreach($grupos as $grupo)

        <option value="{{ $grupo->id }}"
            {{$grupo->id == $alumno->grupo_id ? 'selected' : ''}}>
            {{ $grupo->nombre }}
            
        </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Actualizar</button>
    </form>
@endsection