<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class ProjectTest extends TestCase
{

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
        $user = factory(\App\User::class, 1)->create(['email' => $faker->email, 'password' => bcrypt('passw0RD')]);
        $test = Auth::loginUsingId($user[0]->id, true);
        if(Auth::check()){
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
        if(Auth::check()){
            $response = $this->get('/proyecto');
            $response->assertStatus(200);
        }
    }
}
