require('./bootstrap');

window.Vue = require('vue');

Vue.component('news', require('./components/News.vue').default);
Vue.component('news-post', require('./components/NewsPost.vue').default);

import Vuetify from 'vuetify';
Vue.use(Vuetify);

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import News from "./components/News";
import NewsPage from "./components/NewsPage";
var router = new VueRouter({
    routes: [
        {name: 'home', path: '/', component : News},
        {name: 'newsPost', path: '/news/:slug', component : NewsPage},
    ]
});

const app = new Vue({
    el: '#app',
    router : router,
    vuetify: new Vuetify(),
});
