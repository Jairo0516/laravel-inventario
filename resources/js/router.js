import Vue from 'vue';
import VueRouter from 'vue-router';


Vue.use(VueRouter)


import products from './components/products.vue';
import stores from './components/stores.vue';
const routes = [
    {
        path: '/products',
        component: products
    },
    {
        path: '/stores',
        component: stores
    }
]

export default new VueRouter({ mode: 'history', routes: routes })
