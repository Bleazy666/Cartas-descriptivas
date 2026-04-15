@extends('layouts.app')
@section('content')
    <h1>Editar Grupo</h1>

    <form action="/grupos/{{ $grupo->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="">Nombre del grupo</label>
        <input type="text" name="nombre" value="{{ $grupo->nombre }}" required>

        <br><br>

        <button type="submit">Actualizar</button>

    </form>
@endsection