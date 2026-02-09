<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'administrador',
                'description' => 'Acceso total al sistema'
            ],
            [
                'name' => 'docente',
                'description' => 'Puede crear y editar contenido'
            ],
            [
                'name' => 'alumno',
                'description' => 'Acceso básico al sistema'
            ]
        ]);
    }
}
