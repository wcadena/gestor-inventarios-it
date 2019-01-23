const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    /* CSS */
    .sass('resources/assets/sass/main.scss', 'public/css/dashmix.css')
    .sass('resources/assets/sass/dashmix/themes/xeco.scss', 'public/css/themes/')
    .sass('resources/assets/sass/dashmix/themes/xinspire.scss', 'public/css/themes/')
    .sass('resources/assets/sass/dashmix/themes/xmodern.scss', 'public/css/themes/')
    .sass('resources/assets/sass/dashmix/themes/xsmooth.scss', 'public/css/themes/')
    .sass('resources/assets/sass/dashmix/themes/xwork.scss', 'public/css/themes/')
    .sass('resources/assets/sass/dashmix/themes/xdream.scss', 'public/css/themes/')
    .sass('resources/assets/sass/dashmix/themes/xpro.scss', 'public/css/themes/')
    .sass('resources/assets/sass/dashmix/themes/xplay.scss', 'public/css/themes/')

    /* JS */
    .js('resources/assets/js/laravel/app.js', 'public/js/laravel.app.js')
    .js('resources/assets/js/dashmix/app.js', 'public/js/dashmix.app.js')

    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });
