@extends('layouts.app')
@section('content')
<h1>Crear Grupo</h1>
    <form action="/grupos" method="POST">
        @csrf
        <label for="">Nombre del grupo:</label>
        <input type="text" name="nombre" required>
        <br><br>
        <button type="submit">Guardar <i class="bi bi-floppy-fill"></i> </button>
    </form>
@endsection