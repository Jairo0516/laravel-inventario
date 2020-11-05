import 'bootstrap/dist/js/bootstrap.bundle.min';
require('./bootstrap');

window.Vue = require('vue');


import router from './router';

const app = new Vue({
    el: '#app',
    router
});
