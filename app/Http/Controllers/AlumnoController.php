<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Grupo;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::with('grupo')->get();
        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grupos = Grupo::all();
        return view('alumnos.create', compact('grupos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alumno::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'matricula' => $request->matricula,
            'grupo_id' => $request->grupo_id
        ]);
        return redirect('/alumnos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $grupos = Grupo::all();
        return view('alumnos.edit', compact('alumno', 'grupos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'matricula' => $request->matricula,
            'grupo_id' => $request->grupo_id
        ]);
        return redirect('/alumnos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect('/alumnos');
    }
}
