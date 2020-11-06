import Vue from 'vue';
import VueRouter from 'vue-router';


Vue.use(VueRouter)

import products from './components/product/products.vue';
import AddProduct from './components/product/products.vue';
import stores from './components/store/stores.vue';

Vue.component('AddProduct', require('./components/product/add.vue').default);
Vue.component('EditProduct', require('./components/product/edit.vue').default);

const routes = [
    {
        path: '/products',
        component: products
    },
    {
        path: '/add/products',
        component: AddProduct
    },
    {
        path: '/stores',
        component: stores
    }
]

export default new VueRouter({ mode: 'history', routes: routes })
