/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// vueとvue-routerの定義
import Vue from 'vue'
import router from './routes.js'
import VueRouter from 'vue-router'

// bootstrap.jsのrequire
require('./bootstrap');

// vue-routerを使う宣言
Vue.use(VueRouter);

window.Vue = require('vue');

Vue.component('vue-layout', require('./components/User/Index.vue'));
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

const app = new Vue({
    el: '#app',
    router
});
