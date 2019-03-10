
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**para vuetify
 *
 */
import 'babel-polyfill'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader

Vue.use(Vuetify)



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue')
);

Vue.component('upload-files', require('./components/UploadFiles.vue'));

Vue.component('autocomplete-vue', require('./components/vue-autocomplete.vue'));

//Vue.component('roles-permisos', require('./components/directorio/roles/RolesPermisos.vue'));
Vue.component('permiso', require('./components/directorio/roles/Permiso'));
Vue.component('rol', require('./components/directorio/roles/Rol'));

const app = new Vue({
    el: '#app'
});
import _ from 'lodash';

function init() {
  if ( navigator.serviceWorker ) {
    navigator.serviceWorker.register('/sw.js')
      .then( reg => {
         setTimeout(() => {
             reg.sync.register('posteo-gatitos');
             console.log('Se enviaron fotos de gatitos al server');
         }, 3000);
        Notification.requestPermission().then( result => {
          console.log(result);
          //reg.showNotification('Hola Mundo!');
        });
      });
  }
}
init();

$('.sidebar-menu').tree({
  // Any options here
});