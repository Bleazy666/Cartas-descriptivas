@extends('layouts.app')
@section('content')
<h1>Registrar Alumnos</h1>

    <form action="/alumnos" method="post">

    @csrf
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="" required>

    <br><br>

    <label for="">Apellidos</label>
    <input type="text" name="apellido" id="" required>

    <br><br>
    <label for="">Matricula</label>
    <input type="text" name="matricula" id="" required>

    <br><br>

    <label>Grupo</label>
    <select name="grupo_id">

    @foreach($grupos as $grupo)

    <option value="{{ $grupo->id }}">
    {{ $grupo->nombre }}
    </option>

    @endforeach

    </select>

    <br><br>

    <button type="submit">Guardar <i class="bi bi-floppy-fill"></i> </button>
    
    </form>
@endsection