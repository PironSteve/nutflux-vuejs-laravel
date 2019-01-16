require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);


import axios from 'axios';

Vue.use(axios);

Vue.component('edit-profile', require('./components/EditProfile.vue').default);
Vue.component('pop-up-vid', require('./components/PopUpVid.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('general-movies', require('./components/GeneralMovies.vue').default);
Vue.component('logo', require('./components/Logo.vue').default);
Vue.component('login', require('./components/Login.vue').default);
Vue.component('signin', require('./components/Signin.vue').default);
Vue.component('slogan', require('./components/Slogan.vue').default);
Vue.component('chooseuser', require('./components/Chooseuser.vue').default);
Vue.component('foot', require('./components/Footer.vue').default);
Vue.component('bar', require('./components/Bar.vue').default);
Vue.component('vue-layout', require('./components/Layout.vue').default);
import chooseuser from './components/Chooseuser';
import login from './components/Login';
import generalMovies from './components/GeneralMovies.vue';
import bar from './components/Bar.vue';
import foot from './components/Footer.vue';

const routes = [
    {
        name: 'home',
        path: '/',
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
        component: generalMovies
    }
  ];


const router = new VueRouter({ mode: 'history', routes: routes});


const app = new Vue({
    router
    
}).$mount("#app");