<?php

namespace Tests\Feature;

use Faker\Factory;
use Tests\TestCase;

class RouteTestStoreTest extends TestCase
{
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
     * Test areas.create.
     *
     * @return void
     */
    public function testareas_create()
    {
        $this->urlReturns200('/areas/create');
    }

    /**
     * Test bitacora.create.
     *
     * @return void
     */
    public function testbitacora_create()
    {
        $this->urlReturns302('/bitacora/create');
    }

    /**
     * Test checklist.create.
     *
     * @return void
     */
    public function testchecklist_create()
    {
        $this->urlReturns200('/checklist/create');
    }

    /**
     * Test checklist_opcionescheck.create.
     *
     * @return void
     */
    public function testchecklist_opcionescheck_create()
    {
        $this->urlReturns200('/checklist_opcionescheck/create');
    }

    /**
     * Test config.create.
     *
     * @return void
     */
    public function testconfig_create()
    {
        $this->urlReturns200('/config/create');
    }

    /**
     * Test custodio.create.
     *
     * @return void
     */
    public function testcustodio_create()
    {
        $this->urlReturns200('/custodio/create');
    }

    /**
     * Test empresa.create.
     *
     * @return void
     */
    public function testempresa_create()
    {
        $this->urlReturns200('/empresa/create');
    }

    /**
     * Test equipos.create.
     *
     * @return void
     */
    public function testequipos_create()
    {
        $this->urlReturns200('/equipos/create');
    }

    /**
     * Test estaciones.create.
     *
     * @return void
     */
    public function testestaciones_create()
    {
        $this->urlReturns200('/estaciones/create');
    }

    /**
     * Test roles.create.
     *
     * @return void
     */
    public function testroles_create()
    {
        $this->urlReturns302('/roles/create');
    }

    /**
     * Test informes.create.
     *
     * @return void
     */
    public function testinformes_create()
    {
        //crear primero perfiles
        $this->urlReturns200('/informes/create');
    }

    /**
     * Test modelo.create.
     *
     * @return void
     */
    public function testmodelo_create()
    {
        $this->urlReturns200('/modelo/create');
    }

    /**
     * Test opciones_check.create.
     *
     * @return void
     */
    public function testopciones_check_create()
    {
        $this->urlReturns200('/opciones_check/create');
    }

    /**
     * Test orden.create.
     *
     * @return void
     */
    public function testorden_create()
    {
        $this->urlReturns200('/orden/create');
    }

    /**
     * Test proyecto.create.
     *
     * @return void
     */
    public function testproyecto_create()
    {
        $this->urlReturns200('/proyecto/create');
    }

    /**
     * Test puesto.create.
     *
     * @return void
     */
    public function testpuesto_create()
    {
        $this->urlReturns200('/puesto/create');
    }

    /**
     * Test repo_novedades.create.
     *
     * @return void
     */
    public function testrepo_novedades_create()
    {
        $this->urlReturns200('/repo_novedades/create');
    }

    /**
     * Test reporte1.create.
     *
     * @return void
     */
    public function testreporte1_create()
    {
        $this->urlReturns200('/reporte1/create');
    }



    /**
     * Test tecnico.create.
     *
     * @return void
     */
    public function testtecnico_create()
    {
        $this->urlReturns200('/tecnico/create');
    }

    /**
     * Test ubicacion.create.
     *
     * @return void
     */
    public function testubicacion_create()
    {
        $this->urlReturns200('/ubicacion/create');
    }

    /**
     * Test usuario.create.
     *
     * @return void
     */
    public function testusuario_create()
    {
        $this->urlReturns200('/usuario/create');
    }
}
