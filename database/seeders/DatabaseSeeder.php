<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\TipoIncidencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        TipoIncidencia::create(['nombre' => 'Falta de respeto']);
        TipoIncidencia::create(['nombre' => 'Falta de respeto']);
        TipoIncidencia::create(['nombre' => 'Indisiplina']);
        TipoIncidencia::create(['nombre' => 'Inpunidad']);
        TipoIncidencia::create(['nombre' => 'Daños materiales']);
        TipoIncidencia::create(['nombre' => 'Otros']);


        /* Modifiacar cuando el sistema cuente con login y registro de usuarios
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
