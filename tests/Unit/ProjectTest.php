<?php

namespace Tests\Unit;

use Faker\Factory;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /**
     * Test logout 1.
     */
    public function testLogout0()
    {
        $response = $this->json('POST', '/logout');

        $response->assertStatus(302);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexProyectosinAutorizacion()
    {
        $response = $this->get('/proyecto');
        $response->assertStatus(302);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexProyectodeuntipo()
    {
        $faker = Factory::create();
        $test = Auth::loginUsingId(\App\User::where('rol', 'system')->first()->id, true);
        if (Auth::check()) {
            $response = $this->get('/proyecto');
            $response->assertStatus(200);
        }
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexProyecto()
    {
        $test = Auth::loginUsingId(23, true);
        if (Auth::check()) {
            $response = $this->get('/proyecto');
            $response->assertStatus(200);
        }
    }
}
