<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;
use App\Models\TipoIncidencia;
use App\Models\Alumno;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidencias = Incidencia::with(['alumno', 'tipo'])->get();
        return view ('incidencias.index', compact('incidencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alumnos = Alumno::all();
        $tipos = TipoIncidencia::all();
        return view('incidencias.create', compact('alumnos', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        
        Incidencia::create([
            'alumno_id'=> $request->alumno_id,
            'tipo_incidencia_id'=> $request->tipo_incidencia_id,
            'descripcion'=> $request->descripcion,
            'fecha'=> $request->fecha
        ]);
        return redirect('/incidencias');
    }

    /**
     * Display the specified resource.
     */
    public function show(Incidencia $incidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incidencia $incidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incidencia $incidencia)
    {
        $incidencia->delete();
        return redirect('/incidencias');
    }
}
