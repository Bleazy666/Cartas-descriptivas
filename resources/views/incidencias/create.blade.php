@extends('layouts.app')
@section('content')
<div class="container">

        <h2>Registrar Incidencias</h2>

        <form action="{{ route('incidencias.store') }}" method=POST>
            @csrf
            <div class="mb-3">
                <label for="">Alumno</label>
                <select name="alumno_id" class="form-control" id="" required>
                    <option value="">Seleccione un alumno</option>
                    @foreach($alumnos as $alumno)
                        <option value="{{ $alumno->id}}">
                            {{ $alumno->nombre }}
                        </option>
                        @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="">Tipo de incidencia</label>
                <select name="tipo_incidencia_id" id="" class="form-control" require>
                    <option value="">Seleccione tipo</option>
                    @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}">
                        {{ $tipo->nombre}}
                    </option>
                    @endforeach
                    <option value="otro">Otro</option>
                </select>
            </div>

            <div class="mb-3" id="otroCampo" style="display:none;">
                <label>Tipo personalizado</label>
                <input type="text" name="otro_tipo" class="form-control">
            </div>

            <script>
                document.querySelector('[name="tipo_incidencia_id"]').addEventListener('change', function() {
                    if (this.value === 'otro') {
                        document.getElementById('otroCampo').style.display = 'block';
                    } else {
                        document.getElementById('otroCampo').style.display = 'none';
                    }
                });
            </script>
            
            <div class="mb-3">
                <label for="">Fecha</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="">Descripción</label>
                <textarea name="descripcion" id="" class="form-control" required></textarea>
            </div>

            <button class="btn btn-prymary">
                    Guardar Inciadencia
                    <i class="bi bi-floppy-fill"></i>
            </button>
        </form>

    </div>
@endsection