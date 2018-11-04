



self.addEventListener('fetch', event => {



  const resp = fetch( event.request )
    .then( resp => {

      return resp.ok ? resp : fetch('js/all.js');

    });


  event.respondWith(resp);



});




