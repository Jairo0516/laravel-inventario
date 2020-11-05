import Vue from 'vue';
import VueRouter from 'vue-router';


Vue.use(VueRouter)


import products from './components/products.vue';
const routes = [
    {
        path: '/products',
        component: products
    }
]

export default new VueRouter({ mode: 'history', routes: routes })
