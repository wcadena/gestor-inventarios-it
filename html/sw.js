importScripts("/precache-manifest.6c9ebf8b4b2d10a0a2a13ae6cb5d0ffd.js", "https://storage.googleapis.com/workbox-cdn/releases/3.6.3/workbox-sw.js");




// Ciclo de vida del SW

self.addEventListener('install', event => {

  // Descargar assets
  // Creamos un cache
  console.log('SW: Instalando SW');

  const instalacion = new Promise( (resolve, reject) => {

    setTimeout(() => {
      console.log('SW: Instalaciones terminadas');
      self.skipWaiting();
      resolve();
    }, 1);

  });


  event.waitUntil( instalacion );


});


// Cuando el SW toma el control de la aplicación
self.addEventListener('activate', event => {

  // Borrar cache viejo

  console.log('SW2: Activo y listo para controlar la app');


});


// FETCH: Manejo de peticiones HTTP
self.addEventListener('fetch', event => {

  // Aplicar estrategias del cache
  // console.log( 'SW:', event.request.url );

  // if ( event.request.url.includes('https://reqres.in/') ) {

  //     const resp = new Response(`{ ok: false, mensaje: 'jajaja'}`);

  //     event.respondWith( resp );

  // }

});

// SYNC: Recuperamos la conexión a internet
self.addEventListener('sync', event => {

  console.log('Tenemos conexión!');
  console.log(event);
  console.log(event.tag);

});


// PUSH: Manejar las push notifications
self.addEventListener('push', event => {

  console.log('Notificacion recibida');


});









