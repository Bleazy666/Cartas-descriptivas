<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Incidencias</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    

    <!-- MENÚ IZQUIERDO -->
    <div id="sidebar" class="sidebar">
        <h4>Control Escolar</h4>
        <p>Gestión de Incidencias</p>

        <div class="nav-item text">
            <h6>Navegación</h6>
        </div>

        <a href="{{ route('dashboard') }}">
            <i class="bi bi-speedometer2"></i>
            <span class="text">Dashboard</span>
        </a>

        <a href="/grupos">
            <i class="bi bi-people icon"></i>
            <span class="text">Grupos</span>
        </a>

        <a href="/alumnos">
            <i class="bi bi-person icon"></i>
            <span class="text">Alumnos</span>
        </a>

        <a href="/incidencias">
            <i class="bi bi-exclamation-triangle icon"></i>
            <span class="text">Incidencias</span>
        </a>
    </div>

    <!-- CONTENIDO DINÁMICO -->
    <div class="content flex-grow-1">
        <button id="toggleSidebar" class="btn btn-primary m-2"><i class="bi bi-layout-sidebar"></i></button>
        <span>Sistema de Gestión de Incidencias</span>
        @yield('content')
    </div>

</html>