const { mix } = require('laravel-mix');
const workboxPlugin = require('workbox-webpack-plugin');
var SWPrecacheWebpackPlugin = require('sw-precache-webpack-plugin');

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

mix.js('resources/assets/js/app.js', 'html/js')
   .js('resources/assets/js/app-landing.js', 'html/js/app-landing.js')
   .combine([
       'resources/assets/css/bootstrap.min.css',
       'resources/assets/css/font-awesome.min.css',
       'resources/assets/css/ionicons.min.css',
       'node_modules/admin-lte/dist/css/AdminLTE.min.css',
       'node_modules/admin-lte/dist/css/skins/_all-skins.css',
       'node_modules/icheck/skins/square/blue.css'
   ], 'html/css/all.css')
   .combine([
       'resources/assets/css/bootstrap.min.css',
       'resources/assets/css/pratt_landing.min.css'
   ], 'html/css/all-landing.css')
   // PACKAGE (ADMINLTE-LARAVEL) RESOURCES
   .copy('resources/assets/img/*.*','html/img/')
   //VENDOR RESOURCES
   .copy('node_modules/font-awesome/fonts/*.*','html/fonts/')
   .copy('node_modules/ionicons/dist/fonts/*.*','html/fonts/')
   .copy('node_modules/bootstrap/fonts/*.*','html/fonts/')
   .copy('node_modules/admin-lte/dist/css/skins/*.*','html/css/skins')
   .copy('node_modules/admin-lte/dist/img','html/img')
   .copy('node_modules/admin-lte/plugins','html/plugins')
   .copy('node_modules/icheck/skins/square/blue.png','html/css')
   .copy('node_modules/icheck/skins/square/blue@2x.png','html/css')

  // .copy('node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css','html/css')
   .copy('node_modules/select2/dist/css/select2.min.css','html/css')
   .copy('node_modules/select2/dist/js/select2.min.js','html/js')
   //.copy('node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css','html/css')
   .copy('node_modules/chart.js/Chart.min.js','html/plugins/chartjs')
   .copy('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js','html/plugins/datepicker')

  .setPublicPath('html')
  .options({
    extractVueStyles: true,
    processCssUrls: true,
    uglify: {},
    purifyCss: false,
    //purifyCss: {},
    postCss: [require('autoprefixer')],
    clearConsole: false
  })
  .webpackConfig({
    plugins: [
      new workboxPlugin.InjectManifest({
        cacheId: 'pwa',
        filename: 'sw.js',
        staticFileGlobs: ['public/**/*.{css,eot,svg,ttf,woff,woff2,js,html}'],
        minify: true,
        stripPrefix: 'html/',
        handleFetch: true,
        dynamicUrlToDependencies: { //you should add the path to your blade files here so they can be cached
          //and have full support for offline first (example below)
          '/': ['resources/views/welcome.blade.php','resources/views/home.blade.php'],
          // '/posts': ['resources/views/posts.blade.php']
        },
        staticFileGlobsIgnorePatterns: [/\.map$/, /mix-manifest\.json$/, /manifest\.json$/, /service-worker\.js$/],
        navigateFallback: '/',
        runtimeCaching: [
          {
            urlPattern: /^https:\/\/fonts\.googleapis\.com\//,
            handler: 'cacheFirst'
          },
          {
            urlPattern: /^https:\/\/www\.thecocktaildb\.com\/images\/media\/drink\/(\w+)\.jpg/,
            handler: 'cacheFirst'
          }
        ],
        // importScripts: ['./js/push_message.js']
      })
    ]
  })
  .sourceMaps(!mix.inProduction())
  .disableNotifications();

if (mix.config.inProduction) {
  mix.version();
  mix.minify();
  mix.babel();
}

