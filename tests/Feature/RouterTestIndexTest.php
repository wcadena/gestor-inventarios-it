<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\App;
use Tests\TestCase;

class RouterTestIndexTest extends TestCase
{
    /**
     * Set up tests.
     */
    public function setUp():void
    {
        parent::setUp();
        App::setLocale('es');
    }

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

    ///////////////////////////////////////////////////////////
    /// /////////////////////////////////////////////////////////
    /// ///////////////////////////////////////////////////
    /// //////////////////////////////////////////////////////////

    /**
     * Test logout 1.
     */
    public function testLogout0()
    {
        $response = $this->json('POST', '/logout');

        $response->assertStatus(302);
    }

    /**
     * Test areas.index.
     *
     * @return void
     */
    public function testareas_index()
    {
        $this->urlReturns302('/areas');
    }

    /**
     * Test bitacora.index.
     *
     * @return void
     */
    public function testbitacora_index()
    {
        $this->urlReturns302('/bitacora');
    }

    /**
     * Test checklist.index.
     *
     * @return void
     */
    public function testchecklist_index()
    {
        $this->urlReturns302('/checklist');
    }

    /**
     * Test checklist_opcionescheck.index.
     *
     * @return void
     */
    public function testchecklist_opcionescheck_index()
    {
        $this->urlReturns302('/checklist_opcionescheck');
    }

    /**
     * Test config.index.
     *
     * @return void
     */
    public function testconfig_index()
    {
        $this->urlReturns302('/config');
    }

    /**
     * Test custodio.index.
     *
     * @return void
     */
    public function testcustodio_index()
    {
        $this->urlReturns302('/custodio');
    }

    /**
     * Test empresa.index.
     *
     * @return void
     */
    public function testempresa_index()
    {
        $this->urlReturns302('/empresa');
    }

    /**
     * Test equipos.index.
     *
     * @return void
     */
    public function testequipos_index()
    {
        $this->urlReturns302('/equipos');
    }

    /**
     * Test equiposerching.index.
     *
     * @return void
     */
    public function testequiposerching_index()
    {
        $this->urlReturns302('/equiposerching');
    }

    /**
     * Test estaciones.index.
     *
     * @return void
     */
    public function testestaciones_index()
    {
        $this->urlReturns302('/estaciones');
    }

    /**
     * Test informes.index.
     *
     * @return void
     */
    public function testinformes_index()
    {
        $this->urlReturns302('/informes');
    }

    /**
     * Test modelo.index.
     *
     * @return void
     */
    public function testmodelo_index()
    {
        $this->urlReturns302('/modelo');
    }

    /**
     * Test passport.clients.index.
     *
     * @return void
     */
    public function testpassport_clients_index()
    {
        $this->urlReturns302('/oauth/clients');
    }

    /**
     * Test passport.personal.tokens.index.
     *
     * @return void
     */
    public function testpassport_personal_tokens_index()
    {
        $this->urlReturns302('/oauth/personal-access-tokens');
    }

    /**
     * Test passport.scopes.index.
     *
     * @return void
     */
    public function testpassport_scopes_index()
    {
        $this->urlReturns302('/oauth/scopes');
    }

    /**
     * Test passport.tokens.index.
     *
     * @return void
     */
    public function testpassport_tokens_index()
    {
        $this->urlReturns302('/oauth/tokens');
    }

    /**
     * Test opciones_check.index.
     *
     * @return void
     */
    public function testopciones_check_index()
    {
        $this->urlReturns302('/opciones_check');
    }

    /**
     * Test orden.index.
     *
     * @return void
     */
    public function testorden_index()
    {
        $this->urlReturns302('/orden');
    }

    /**
     * Test postSearch.index.
     *
     * @return void
     */
    public function testpostSearch_index()
    {
        $this->urlReturns302('/postSearch');
    }

    /**
     * Test proyecto.index.
     *
     * @return void
     */
    public function testproyecto_index()
    {
        $this->urlReturns302('/proyecto');
    }

    /**
     * Test puesto.index.
     *
     * @return void
     */
    public function testpuesto_index()
    {
        $this->urlReturns302('/puesto');
    }

    /**
     * Test repo_novedades.index.
     *
     * @return void
     */
    public function testrepo_novedades_index()
    {
        $this->urlReturns302('/repo_novedades');
    }

    /**
     * Test reporte1.index.
     *
     * @return void
     */
    public function testreporte1_index()
    {
        $this->urlReturns302('/reporte1');
    }

    /**
     * Test roles.index.
     *
     * @return void
     */
    public function testroles_index()
    {
        $this->urlReturns302('/roles');
    }

    /**
     * Test tecnico.index.
     *
     * @return void
     */
    public function testtecnico_index()
    {
        $this->urlReturns302('/tecnico');
    }

    /**
     * Test ubicacion.index.
     *
     * @return void
     */
    public function testubicacion_index()
    {
        $this->urlReturns302('/ubicacion');
    }

    /**
     * Test usuario.index.
     *
     * @return void
     */
    public function testusuario_index()
    {
        $this->urlReturns302('/usuario');
    }
}
