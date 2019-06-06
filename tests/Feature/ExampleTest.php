<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /* inicio
        * Set up tests.
        * /
       public function setUp(): void
       {
           parent::setUp();
           App::setLocale('es');
       }

       /**
        * Set up before class.
        * /
       public static function setUpBeforeClass()
       {
           passthru('composer dumpautoload');
       }
fin
    */

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
