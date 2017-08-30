const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'js')
    .js('resources/assets/js/app-landing.js', 'js/app-landing.js')
    .sass('resources/assets/sass/app.scss', 'html/css')
    .less('node_modules/bootstrap-less/bootstrap/bootstrap.less', 'html/css/bootstrap.css')
    .less('resources/assets/less/adminlte-app.less','html/css/adminlte-app.css')
    .less('node_modules/toastr/toastr.less','html/css/toastr.css')
    .combine([
        'html/css/app.css',
        'node_modules/admin-lte/dist/css/skins/_all-skins.css',
        'html/css/adminlte-app.css',
        'node_modules/icheck/skins/square/blue.css',
        'html/css/toastr.css',
        'node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css',
    ], 'html/css/all.css')
    .combine([
        'html/css/bootstrap.css',
        'resources/assets/css/main.css'
    ], 'html/css/all-landing.css')
    //APP RESOURCES
    .copy('resources/assets/img/*.*','html/img')
    //VENDOR RESOURCES
    .copy('node_modules/font-awesome/fonts/*.*','html/fonts/')
    .copy('node_modules/ionicons/dist/fonts/*.*','html/fonts/')
    .copy('node_modules/admin-lte/bootstrap/fonts/*.*','html/fonts/bootstrap')
    .copy('node_modules/admin-lte/dist/css/skins/*.*','html/css/skins')
    .copy('node_modules/admin-lte/dist/img','html/img')
    .copy('node_modules/admin-lte/plugins','html/plugins')
    .copy('node_modules/icheck/skins/square/blue.png','html/css')
    .copy('node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css','html/css')
    .copy('node_modules/select2/dist/css/select2.min.css','html/css')
    .copy('node_modules/select2/dist/js/select2.min.js','html/js')

    .copy('node_modules/icheck/skins/square/blue@2x.png','html/css')
    .setPublicPath('html')
;

if (mix.config.inProduction) {
    mix.version();
}