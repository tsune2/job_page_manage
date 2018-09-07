/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// vueとvue-routerの定義
import Vue from 'vue'
import VueRouter from 'vue-router'

// bootstrap.jsのrequire
require('./bootstrap');

// vue-routerを使う宣言
Vue.use(VueRouter);

window.Vue = require('vue');

const router = new VueRouter({
    mode: 'history',
    routes: [{
        path: '/users',
        component: require('./components/UserlistComponent.vue')
    }]
});

const app = new Vue({
    router,
    el: '#app'
});
