<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoIncidencia;

class TipoIncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = [
            'Falta de respeto',
            'Agresión física',
            'Impunidad',
            'Daños Materiales',
            'Indisciplina'
        ];
        foreach ($tipos as $tipo){
            TipoIncidencia::create([
                'nombre' => $tipo
            ]);
        }
    }
}
