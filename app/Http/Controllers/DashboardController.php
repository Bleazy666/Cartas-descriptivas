<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grupo;
use App\Models\Alumno;
use App\Models\Incidencia;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalGrupos' => Grupo::count(),
            'totalAlumnos' => Alumno::count(),
            'totalIncidencias' => Incidencia::count(),

        'incidenciasMes' => Incidencia::whereMonth('fecha', now()->month)
        ->selectRaw('DATE(fecha) as dia, COUNT(*) as total')
        ->groupBy('dia')
        ->get(),

        'recientes' => Incidencia::with('alumno', 'tipo')
            ->latest()
            ->take(5)
            ->get(),
        
        'topAlumnos' => Incidencia::select('alumno_id', DB::raw('count(*) as total'))
            ->groupBy('alumno_id')
            ->orderByDesc('total')
            ->with('alumno')
            ->take(5)
            ->get()
        ]);
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