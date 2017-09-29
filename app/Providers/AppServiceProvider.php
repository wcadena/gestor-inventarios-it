<?php

namespace App\Providers;

use App\Mail\UserCreated;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);

       /*
        * para embio de correo cuando se realiza un ingreso.
        */
        User::created(function($user) {
            retry(5, function() use ($user) {
                Mail::to($user)->send(new UserCreated($user));
            }, 100);
        });
        User::updated(function($user) {
            if ($user->isDirty('email')) {
                $user->verified=0;
                $user->verification_token = User::generarVerificationToken();
                $user->save();
                retry(5, function() use ($user) {
                    Mail::to($user)->send(new UserCreated($user));
                }, 100);
            }
        });




    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local', 'testing')) {

        }
        $this->app->bind('path.public', function() {
            return base_path().'/html';
        });
    }
}
