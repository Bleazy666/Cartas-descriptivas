<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\Incidencia;

class DashboardController extends Controller
{
    public function index()
    {
        $totalGrupos = Grupo::count();
        $totalAlumnos = Alumno::count();
        $totalIncidencias = Incidencia::count();

        return view('dashboard', compact(
            'totalGrupos',
            'totalAlumnos',
            'totalIncidencias'
        ));
    }
}


/**
 * public function datos()
{
    return response()->json([
        'grupos' => \App\Models\Grupo::count(),
        'alumnos' => \App\Models\Alumno::count(),
        'incidencias' => \App\Models\Incidencia::count(),
        'mes' => \App\Models\Incidencia::whereMonth('created_at', now()->),
        'recientes' => \App\Models\Incidencia::latest()->take(5)->get(),
    ]);
}
 */