<?php

namespace App\Providers;

use App\Mail\UserCreated;
use App\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Intervention\Image\ImageManagerStatic;

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
        User::created(function ($user) {
            retry(5, function () use ($user) {
                Mail::to($user)->send(new UserCreated($user));
            }, 100);
        });
        User::updated(function ($user) {
            if ($user->isDirty('email')) {
                $user->verified = 0;
                $user->verification_token = User::generarVerificationToken();
                $user->save();
                retry(5, function () use ($user) {
                    Mail::to($user)->send(new UserCreated($user));
                }, 100);
            }
        });

        \Illuminate\Support\Facades\Validator::extend('is_jpg', function ($attribute, $value, $params, $validator) {
            $image = base64_decode($value);
            $f = finfo_open();
            $result = finfo_buffer($f, $image, FILEINFO_MIME_TYPE);

            return $result == 'image/jpg';
        });
        \Illuminate\Support\Facades\Validator::extend('imageable', function ($attribute, $value, $params, $validator) {
            try {
                ImageManagerStatic::make($value);

                return true;
            } catch (\Exception $e) {
                return false;
            }
        });
        //local de carbon
        \Carbon\Carbon::setlocale(LC_TIME, config('app.locale'));
        \Carbon\Carbon::setLocale(config('app.locale'));
        //Custom Polymorphic Types
        Relation::morphMap([
            'informe_proyectos_seccion' => 'App\InformeMantenimientoPreventivo',
            //'videos' => 'App\Video',
        ]);
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
        $this->app->bind('path.public', function () {
            return base_path().'/public';
        });
    }
}
