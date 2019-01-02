

const CACHE_NAME = 'cache-1';
const CACHE_STATIC_NAME  = 'static-v2';
const CACHE_DYNAMIC_NAME = 'dynamic-v1';
const CACHE_INMUTABLE_NAME = 'inmutable-v1';

const CACHE_DYNAMIC_LIMIT = 50;


function limpiarCache( cacheName, numeroItems ) {


  caches.open( cacheName )
    .then( cache => {

      return cache.keys()
        .then( keys => {

          if ( keys.length > numeroItems ) {
            cache.delete( keys[0] )
              .then( limpiarCache(cacheName, numeroItems) );
          }
        });


    });
}




self.addEventListener('install', e => {


  const cacheProm = caches.open( CACHE_STATIC_NAME )
    .then( cache => {

      return cache.addAll([
        '/',
        '/home',
        '/css/all.css',
        '/plugins/chartjs/Chart.min.js',
        '/js/app.js',
        '/css/select2.min.css',
        '/fonts/glyphicons-halflings-regular.woff2',
        '/fonts/fontawesome-webfont.woff2?v=4.7.0',
      ]);


    });

  const cacheInmutable = caches.open( CACHE_INMUTABLE_NAME )
    .then(
      cache => cache.add('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')
    );


  e.waitUntil( Promise.all([cacheProm, cacheInmutable]) );

});








