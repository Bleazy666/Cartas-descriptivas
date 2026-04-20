@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold">Dashboard</h2>
            <span class="text-muted">Resumen general del sistema</span>
        </div>

        <div>
            <button class="btn btn-primary me-2 deco">
                <i class="bi bi-plus-lg"></i>
                <span><a href="{{ route('incidencias.create') }}" class="">Nueva Incidencia</a></span>
            </button>

            <button class="btn btn-outline-secondary">
                <i class="bi bi-upload"></i> Importar Lista
            </button>
        </div>
    </div>

    <!-- CARDS -->
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card dashboard-card">
                <div>
                    <p class="card-title">Grupos</p>
                    <h3>{{ $totalGrupos }}</h3>
                </div>
                <i class="bi bi-people card-icon"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card">
                <div>
                    <p class="card-title">Alumnos</p>
                    <h3>{{ $totalAlumnos }}</h3>
                </div>
                <i class="bi bi-person card-icon"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card">
                <div>
                    <p class="card-title">Incidencias</p>
                    <h3>{{ $totalIncidencias }}</h3>
                </div>
                <i class="bi bi-exclamation-triangle card-icon"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card dashboard-card">
                <div>
                    <p class="card-title">Este mes</p>
                    <canvas id="graficaIncidencias"></canvas>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                        <script>
                        const datos = @json($incidenciasMes);

                        const labels = datos.map(d => d.dia);
                        const valores = datos.map(d => d.total);

                        new Chart(document.getElementById('graficaIncidencias'), {
                            type: 'line',
                            data: {
                                labels: labels,
                                datasets: [{
                                    label: 'Incidencias del mes',
                                    data: valores,
                                    borderWidth: 2
                                }]
                            }
                        }); 
                    </script>
                </div>
                <i class="bi bi-graph-up card-icon"></i>
            </div>
        </div>

    </div>

    <!-- SEGUNDA FILA -->
    <div class="row g-3">

        <div class="col-md-6">
            <div class="card p-4">
                <h6 class="fw-bold">Incidencias Recientes</h6>
                @foreach($recientes as $i)
                    <p>
                        {{ $i->alumno->nombre }} {{ $i->alumno->apellido }} - 
                        {{ $i->tipo->nombre }} - 
                        {{ $i->fecha }}
                    </p>
                @endforeach
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-4">
                <h6 class="fw-bold">Alumnos con Más Incidencias</h6>
                @foreach($topAlumnos as $a)
                    <p>
                        {{ $a->alumno->nombre }} {{ $a->alumno->apellido }} ({{ $a->total }})
                    </p>
                @endforeach
            </div>
        </div>

    </div>

</div>

@endsection