<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteExerciseTest extends TestCase
{
    public function test_rutas(): void
    {
    /**
     * main page test.
     */
        $value = 'Pantalla principal';
        $response = $this->get('/');

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);

    /**
     * login test.
     */
        $value = 'Login usuario';
        $response = $this->get('/login');

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);

    /**
     * logout test.
     */
        $value = 'Logout usuario';
        $response = $this->get('/logout');

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);

    /**
     * familias-profesionales index test.
     */
        $value = 'Listado familias profesionales';
        $response = $this->get('/familias-profesionales');

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);

    /**
     * familias-profesionales show test.
     */
        $id = rand(1, 10);
        $value = "Vista detalle familia profesional $id";
        $response = $this->get("/familias-profesionales/show/$id");

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);
        $response = $this->get("/familias-profesionales/show/" . chr(ord('A') + $id));
        $response->assertNotFound();

    /**
     * familias-profesionales create test.
     */
        $value = 'Añadir familia profesional';
        $response = $this->get('/familias-profesionales/create');

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);

    /**
     * familias-profesionales edit test.
     */
        $id = rand(1, 10);
        $value = "Modificar familia profesional $id";
        $response = $this->get("/familias-profesionales/edit/$id");

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);

        $response = $this->get("/familias-profesionales/edit/" . chr(ord('A') + $id));
        $response->assertNotFound();

    /**
     * perfil test.
     */
        $id = rand(1, 10);
        $value = "Visualizar el usuario de $id";
        $response = $this->get("/perfil/$id");

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);

        $value = "Visualizar el usuario propio";
        $response = $this->get("/perfil");

        $response->assertStatus(200)->assertSeeText($value, $escaped = true);

        $response = $this->get("/perfil/" . chr(ord('A') + $id));
        $response->assertNotFound();
    }

}