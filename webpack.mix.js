let mix = require('laravel-mix');

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

  mix.autoload({
    'jquery': ['$', 'window.jQuery', 'jQuery'],
})

mix.webpackConfig({
    resolve: {
        alias: {
        	'Api': path.resolve(__dirname, 'resources/js/api/'),
        	'Components': path.resolve(__dirname, 'resources/js/components/'),
        	'Constants': path.resolve(__dirname, 'resources/js/constants/'),
        	'Container': path.resolve(__dirname, 'resources/js/container/'),
        	'Views': path.resolve(__dirname, 'resources/js/views/'),
        	'Helpers': path.resolve(__dirname, 'resources/js/helpers/'),
        	'Themes': path.resolve(__dirname, 'resources/js/themes/')
        }
    }
});

mix.js('resources/js/main.js', 'public/js');
