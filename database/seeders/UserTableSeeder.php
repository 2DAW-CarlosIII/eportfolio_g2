<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        // Crear un usuario administrador por defecto
        foreach (self::$usuarios as $usuario) {
           User::create([
                'name' => $usuario['name'],
                'nombre' => $usuario['nombre'],
                'apellidos' => $usuario['apellidos'],
                'email' => $usuario['email'],
                'password' => Hash::make($usuario['password']),
            ]);
        }
        $this->command->info('¡Tabla users inicializada con datos!');
    }
    public static $usuarios = [
        ['name' => 'Juan', 'nombre' => 'Juan', 'apellidos' => 'Pérez', 'email' => 'juanPerez@gmail.com', 'password' => 'juan1234'],
        ['name' => 'María', 'nombre' => 'María', 'apellidos' => 'Gómez', 'email' => 'MariaGomez@gmail.com', 'password' => 'maria1234'],
        ['name' => 'Luis', 'nombre' => 'Luis', 'apellidos' => 'Rodríguez', 'email' => 'LuisRodrigo@gmail.com', 'password' => 'luis1234'],
        ['name' => 'Ana', 'nombre' => 'Ana', 'apellidos' => 'López', 'email' => 'AnaLopez@gmail.com', 'password' => 'ana1234'],
        ['name' => 'Carlos', 'nombre' => 'Carlos', 'apellidos' => 'Martínez', 'email' => 'CarlosMartinez@gmail.com', 'password' => 'carlos1234'],
        ['name' => 'Sofía', 'nombre' => 'Sofía', 'apellidos' => 'Hernández', 'email' => 'SofiaHernandez@gmail.com', 'password' => 'sofia1234'],
        ['name' => 'Miguel', 'nombre' => 'Miguel', 'apellidos' => 'Díaz', 'email' => 'MiguelDiaz@gmail.com', 'password' => 'miguel1234'],
        ['name' => 'Lucía', 'nombre' => 'Lucía', 'apellidos' => 'Fernández', 'email' => 'LuciaFernandez@gmail.com', 'password' => 'lucia1234'],
        ['name' => 'Javier', 'nombre' => 'Javier', 'apellidos' => 'García', 'email' => 'JavierGarcia@gmail.com', 'password' => 'javier1234'],
        ['name' => 'Elena', 'nombre' => 'Elena', 'apellidos' => 'Sánchez', 'email' => 'ElenaSanchez@gmail.com', 'password' => 'elena1234'],
    ];
}
