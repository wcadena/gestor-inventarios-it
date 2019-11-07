<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes(null, ['middleware' => [\Barryvdh\Cors\HandleCors::class]]);
        //Passport::routes();
        //
        Passport::tokensExpireIn(Carbon::now()->addDays(150));

        Passport::refreshTokensExpireIn(Carbon::now()->addDays(200));

        Passport::tokensCan([
            'place-orders' => 'Place orders',
            'check-status' => 'Check order status',
            'dar-datos'    => 'Entregar datos personales',
        ]);

        Passport::enableImplicitGrant();
    }
}
