<?php

namespace Tests\Feature;

use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

/**
 * Class AcachaAdminLTELaravelTest.
 */
class AcachaAdminLTELaravelTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * Set up tests.
     */
    public function setUp(): void
    {
        parent::setUp();
        App::setLocale('es');
    }

    /**
     * Set up before class.
     */
    public static function setUpBeforeClass()
    {
        passthru('composer dumpautoload');
    }

    /**
     * Test url returns 200.
     *
     * @param $url
     */
    public function urlReturns200($url)
    {
        echo 'a2';
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
        echo 'a3';
        $response = $this->get($url);
        echo 'a4';
        $response->assertStatus($code);
    }

    /**
     * Test logout 1.
     */
    public function testLogout0()
    {
        $response = $this->json('POST', '/logout');

        $response->assertStatus(302);
    }

    /**
     * Test landing page.
     *
     * @return void
     */
    public function testLandingPage()
    {
        echo 'xx1';
        $this->urlReturns200('/');
    }

    /**
     * Test home page.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->urlReturns302('/home');
    }

    /**
     * Test login page.
     *
     * @return void
     */
    public function testLoginPage()
    {
        $this->urlReturns200('/login');
    }

    /**
     * Test register page.
     *
     * @return void
     */
    public function testRegisterPage()
    {
        $this->urlReturns200('/register');
    }

    /**
     * Test password reset page.
     *
     * @return void
     */
    public function testPasswordResetPage()
    {
        $this->urlReturns200('/password/reset');
    }

    /**
     * Test 404 Error page.
     *
     * @return void
     */
    public function test404Page()
    {
        $this->urlReturns404('asdasdjlapmnnk');
    }

    /**
     * Test user api.
     *
     * @return void
     */
    public function testUserApi()
    {
        $this->urlReturns200('/api/users');
    }

    /**
     * Test user registration.
     *
     * @return void
     */
    public function testNewUserRegistration()
    {
        $response = $this->json('POST', '/register', [
            'name'                  => 'Sergi Tur Badenas',
            'email'                 => 'sergiturbadenas@gmail.com',
            'terms'                 => 'true',
            'username'              => 'msalad',
            'password'              => 'passw0RD',
            'password_confirmation' => 'passw0RD',
            'first_name'            => 'Marcowww',
            'last_name'             => 'Salad',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('users', [
            'name'  => 'Sergi Tur Badenas',
            'email' => 'sergiturbadenas@gmail.com',
        ]);
    }

    /**
     * Test logout 1.
     */
    public function testLogout()
    {
        $response = $this->json('POST', '/logout');

        $response->assertStatus(302);
    }

    /**
     * Test user registration required fields.
     *
     * @return void
     */
    public function testNewUserRegistrationRequiredFields()
    {
        $response = $this->json('POST', '/register', [
            'name'                  => '',
            'email'                 => '',
            'terms'                 => '',
            'username'              => '',
            'password'              => '',
            'password_confirmation' => '',
            'first_name'            => '',
            'last_name'             => '',
        ]);

        $response->assertStatus(422)->assertJson(
            [
                'error' => [
                    'name'          => ['El name es necesario como campo.'],
                    'email'         => ['El email es necesario como campo.'],
                    'password'      => ['El password es necesario como campo.'],
                    'terms'         => ['El terms es necesario como campo.'],
                ],
                'code'=> 422,
            ], false);
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

    /**
     * Test logout 1.
     */
    public function testLogout2()
    {
        $response = $this->json('POST', '/logout');

        $response->assertStatus(302);
    }

    /**
     * Test login failed.
     *
     * @return void
     */
    public function testLoginFailed()
    {
        $response = $this->json('POST', '/login', [
            'email'    => 'sergiturbadenas@gmail.com',
            'password' => 'passw0RDinventatquenopotfuncionat',
        ]);

        $response->assertStatus(422)->decodeResponseJson([
            'email' => 'Estas credenciales no coinciden con nuestros registros.',
        ]);
    }

    /**
     * Test user registration required fields.
     *
     * @return void
     */
    public function testLoginRequiredFields()
    {
        $response = $this->json('POST', '/login', [
            'email'    => '',
            'password' => '',
        ]);

        $response->assertStatus(422)->assertExactJson([
            'code'      => 422,
            'error'     => [
                'email'     => ['El email es necesario como campo.'],
                'password'  => ['El password es necesario como campo.'],
            ],
        ]);
    }
}
