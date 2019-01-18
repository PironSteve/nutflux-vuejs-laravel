require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';





Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('general-movies', require('./components/GeneralMovies.vue').default);
Vue.component('logo', require('./components/Logo.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('slogan', require('./components/Slogan.vue').default);
Vue.component('chooseuser', require('./components/Chooseuser.vue').default);
Vue.component('foot', require('./components/Footer.vue').default);
Vue.component('bar', require('./components/Bar.vue').default);

import editprofile from './components/EditProfile';
import catalog from './components/Catalog.vue';
import chooseuser from './components/Chooseuser';
import login from './components/Login';
import generalMovies from './components/GeneralMovies';
import bar from './components/Bar';
import foot from './components/Footer';
import favorite from './components/Favorite';
import seen from './components/Seen';
import towatch from './components/Towatch';

const routes = [
    {
        name: 'home',
        path: '/',
        component: login
    },
    {
        name: 'home',
        path: '/login',
        component: login        
    },
    {
        name: 'choose',
        path: '/choose',
        component: chooseuser
    },
    {
        name: 'catalogue',
        path: '/catalogue',
        component: catalog
    },
    {
        name: 'editprofile',
        path: '/editprofile',
        component: editprofile
    },
    {
        name: 'favorite',
        path: '/favorite',
        component: favorite
    },
    {
        name: 'seen',
        path: '/seen',
        component: seen
    },
    {
        name: 'towatch',
        path: '/towatch',
        component: towatch
    }
  ];


const router = new VueRouter({ mode: 'history', routes: routes});


const app = new Vue({
    router

}).$mount("#app");
