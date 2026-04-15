<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $fillable = [
        'alumno_id',
        'tipo_id',
        'descripcion',
        'fecha',
        'tipo_incidencia_id'
    ];


    public function  alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id', 'id');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoIncidencia::class, 'tipo_incidencia_id', 'id');
    }


}
