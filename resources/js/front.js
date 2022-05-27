window.axios = require('axios');

window.Vue = require('vue');
import Vue from 'vue';
import VueRouter  from 'vue-router'
import App from './views/App';
Vue.use(VueRouter)

import AboutUs from './pages/About.vue';
import PostList from './pages/PostList.vue';


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home-page',
            component: PostList
        },
        {
            path: '/about-us',
            name: 'about-us',
            component: AboutUs
        },
        {
            path: '/posts',
            name: 'post-list',
            component: PostList
        },
    ]
});


const app = new Vue({
    el: '#root',
    render: h => h(App),
    router 
});
