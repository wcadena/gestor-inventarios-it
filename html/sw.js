importScripts("/precache-manifest.a28c0cac64b02dec8ee38bd903e6d205.js", "https://storage.googleapis.com/workbox-cdn/releases/3.6.3/workbox-sw.js");





self.addEventListener('fetch', event => {



  const resp = fetch( event.request )
    .then( resp => {

      return resp.ok ? resp : fetch('js/all.js');

    });


  event.respondWith(resp);



});





