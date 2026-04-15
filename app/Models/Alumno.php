<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'matricula',
        'grupo_id'
    ];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    public function incidencias()
    {
        return $this->hasMany(Incidencia::class);
    }
    
    public function tipo_incidencias()
    {
        return $this->hasMany(TipoIncidencias::class);
    }
}