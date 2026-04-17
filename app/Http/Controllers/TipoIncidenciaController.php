<?php

namespace App\Http\Controllers;

use App\Models\TipoIncidencia;
use Illuminate\Http\Request;

class TipoIncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->tipo_incidencia_id === 'otro') {
            $tipo = TipoIncidencia::create([
                'nombre' => $request->otro_tipo
            ]);

            $tipo_id = $tipo->id;
        } else {
            $tipo_id = $request->tipo_incidencia_id;
        }

    Incidencia::create([
        'alumno_id' => $request->alumno_id,
        'tipo_incidencia_id' => $tipo_id,
        'fecha' => $request->fecha,
        'descripcion' => $request->descripcion,
    ]);

    return redirect()->back()->with('success', 'Incidencia registrada');
    }



    /**
     * Display the specified resource.
     */
    public function show(TipoIncidencia $tipoIncidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TipoIncidencia $tipoIncidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TipoIncidencia $tipoIncidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TipoIncidencia $tipoIncidencia)
    {
        //
    }
}
