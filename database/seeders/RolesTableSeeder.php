<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rol::truncate();
        foreach (self::$roles as $rol) {
            Rol::insert([
                'name' => $rol['name'],
                'description' => $rol['description'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }

    public static $roles = [
         [
            'name' => 'docente',
            'description' => 'Gestión de contenidos y alumnos.'
        ],
        [
            'name' => 'estudiante',
            'description' => 'Acceso a cursos y actividades.'
        ],
        [
            'name' => 'administrador',
            'description' => 'Control total del sistema.'
        ],
    ];
}
