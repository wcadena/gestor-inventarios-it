const { mix } = require('laravel-mix');
const workboxPlugin = require('workbox-webpack-plugin');
const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

/*
 |--------------------------------------------------------------------------
 | Package.json
 |--------------------------------------------------------------------------
 */

const package = require('./package.json');
const dependencies = Object.keys(package.dependencies);

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
        'node_modules/jquery-chosen/chosen.css',
    ], 'html/css/all.css')
    .combine([
        'html/css/bootstrap.css',
        'resources/assets/css/main.css'
    ], 'html/css/all-landing.css')
    .scripts([
        'node_modules/jquery-chosen/chosen.jquery.js',
        'resources/assets/js/app_master.js'
    ], 'html/js/all.js')

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
    .copy('node_modules/jquery-chosen/chosen-sprite.png','html/css')
    .copy('node_modules/jquery-chosen/chosen-sprite@2x.png','html/css')

    .copy('node_modules/icheck/skins/square/blue@2x.png','html/css')
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
      new workboxPlugin.GenerateSW({
        globDirectory: `${__dirname}/html`,
        globPatterns: [
          '**/*.{html,css,js}',
          'fonts/**/*.*'
        ],
        //  swSrc: './src/sw.js',
        swDest: path.join(`${__dirname}/html`, 'sw.js'),
        clientsClaim: true,
        skipWaiting: true,
        runtimeCaching: [
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
        ]
      }),
      new BundleAnalyzerPlugin({
        analyzerMode: 'static',
        reportFilename: path.join(`${__dirname}/html`, 'webpack-report.html'),
        openAnalyzer: false,
        logLevel: 'silent'
      }),
    ]
  })
  .sourceMaps(!mix.inProduction())
  .disableNotifications()
;

if (mix.config.inProduction) {
    //mix.version();
}