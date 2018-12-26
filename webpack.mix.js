const { mix } = require('laravel-mix');
const workboxPlugin = require('workbox-webpack-plugin');
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
  .sourceMaps()
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
  .copy('node_modules/chart.js/Chart.min.js','html/js')

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
        swSrc: 'resources/assets/js/sw.js',
        swDest: path.join(`${__dirname}/html`, 'sw.js'),
        modifyUrlPrefix: {
          '/': ''
        },
        //clientsClaim: true,
        //skipWaiting: true,
        /*runtimeCaching: [
          {
            urlPattern: new RegExp(`${process.env.APP_URL}`),
            handler: 'staleWhileRevalidate',
            options: {
              cacheName: `${process.env.APP_NAME}-${process.env.APP_ENV}`
            }
          },
          {
            urlPattern: new RegExp('https://fonts.(googleapis|gstatic).com'),
            handler: 'cacheFirst',
            options: {
              cacheName: 'google-fonts'
            }
          }
        ]*/

      })
    ]
  })
  .sourceMaps(!mix.inProduction())
  .disableNotifications();

if (mix.config.inProduction) {
  mix.version();
  mix.minify();
}
