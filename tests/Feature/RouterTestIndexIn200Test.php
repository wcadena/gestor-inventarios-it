<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class RouterTestIndexIn200Test extends TestCase
{
    private function loginuser()
    {
        $faker = Factory::create();
        $correo = $faker->email;
        $user = factory(\App\User::class, 1)->create(['email' => $correo, 'password' => bcrypt('passw0RD')]);

        return \App\User::where('email', $correo)->first();
    }

    // use DatabaseTransactions;

    /**
     * Test url returns 200.
     *
     * @param $url
     */
    public function urlReturns200($url)
    {
        $this->urlReturnsCode($url, 200);
    }

    /**
     * Test url returns 404.
     *
     * @param $url
     */
    public function urlReturns404($url)
    {
        $this->urlReturnsCode($url, 404);
    }

    /**
     * Test url returns 302.
     *
     * @param $url
     */
    public function urlReturns302($url)
    {
        $this->urlReturnsCode($url, 302);
    }

    /**
     * Test url returns 401.
     *
     * @param $url
     */
    public function urlReturns401($url)
    {
        $this->urlReturnsCode($url, 401);
    }

    /**
     * Test url returns a specific status code.
     *
     * @param $url
     * @param $code
     */
    public function urlReturnsCode($url, $code)
    {
        $response = $this->get($url);

        $response->assertStatus($code);
    }

    /**
     * Test login.
     *
     * @return void
     */
    public function testLogin()
    {
        $faker = Factory::create();
        $user = factory(\App\User::class, 1)->create(['email' => $faker->email, 'password' => bcrypt('passw0RD')]);
        $response = $this->json('POST', '/login', [
            'email'    => $user[0]->email,
            'password' => 'passw0RD',
        ]);

        $response->assertStatus(302);
    }

    ////////////////////////////////////////////////////

    /**
     * Test areas.index.
     *
     * @return void
     */
    public function testareas_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/areas');
    }

    /**
     * Test bitacora.index.
     *
     * @return void
     */
    public function testbitacora_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/bitacora');
    }

    /**
     * Test checklist.index.
     *
     * @return void
     */
    public function testchecklist_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/checklist');
    }

    /**
     * Test checklist_opcionescheck.index.
     *
     * @return void
     */
    public function testchecklist_opcionescheck_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/checklist_opcionescheck');
    }

    /**
     * Test config.index.
     *
     * @return void
     */
    public function testconfig_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/config');
    }

    /**
     * Test custodio.index.
     *
     * @return void
     */
    public function testcustodio_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/custodio');
    }

    /**
     * Test empresa.index.
     *
     * @return void
     */
    public function testempresa_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/empresa');
    }

    /**
     * Test equipos.index.
     *
     * @return void
     */
    public function testequipos_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/equipos');
    }

    /**
     * Test estaciones.index.
     *
     * @return void
     */
    public function testestaciones_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/estaciones');
    }

    /**
     * Test informes.index.
     *
     * @return void
     */
    public function testinformes_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/informes');
    }

    /**
     * Test modelo.index.
     *
     * @return void
     */
    public function testmodelo_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/modelo');
    }

    /**
     * Test passport.clients.index.
     *
     * @return void
     */
    public function testpassport_clients_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/oauth/clients');
    }

    /**
     * Test passport.personal.tokens.index.
     *
     * @return void
     */
    public function testpassport_personal_tokens_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/oauth/personal-access-tokens');
    }

    /**
     * Test passport.scopes.index.
     *
     * @return void
     */
    public function testpassport_scopes_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/oauth/scopes');
    }

    /**
     * Test passport.tokens.index.
     *
     * @return void
     */
    public function testpassport_tokens_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/oauth/tokens');
    }

    /**
     * Test opciones_check.index.
     *
     * @return void
     */
    public function testopciones_check_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/opciones_check');
    }

    /**
     * Test orden.index.
     *
     * @return void
     */
    public function testorden_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/orden');
    }

    /**
     * Test proyecto.index.
     *
     * @return void
     */
    public function testproyecto_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/proyecto');
    }

    /**
     * Test puesto.index.
     *
     * @return void
     */
    public function testpuesto_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/puesto');
    }

    /**
     * Test repo_novedades.index.
     *
     * @return void
     */
    public function testrepo_novedades_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/repo_novedades');
    }

    /**
     * Test reporte1.index.
     *
     * @return void
     */
    public function testreporte1_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/reporte1');
    }

    /**
     * Test roles.index.
     *
     * @return void
     */
    public function testroles_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/roles');
    }

    /**
     * Test tecnico.index.
     *
     * @return void
     */
    public function testtecnico_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/tecnico');
    }

    /**
     * Test ubicacion.index.
     *
     * @return void
     */
    public function testubicacion_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/ubicacion');
    }

    /**
     * Test usuario.index.
     *
     * @return void
     */
    public function testusuario_index()
    {
        $this->actingAs($this->loginuser())->urlReturns200('/usuario');
    }
}
