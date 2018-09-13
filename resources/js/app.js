/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// vueとvue-routerの定義
import Vue from 'vue'
// import VueRouter from 'vue-router'
// import router from './router'
import Index from './components/Index.vue'

// bootstrap.jsのrequire
require('./bootstrap');

// vue-routerを使う宣言
//Vue.use(VueRouter);

window.Vue = require('vue');

// OAuth2.0 フロントエンド
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

const data = {
    name: 'Client Name',
    redirect: 'https://vm.jpm.jp/auth/callback'
};
axios.get('/oauth/clients').then(response => {
    console.log(response.data);
});
axios.post('/oauth/clients', data).then(response => {
    console.log(response.data);
}).catch (response => {});
axios.put('/oauth/clients/' + clientId, data).then(response => {
    console.log(response.data);
}).catch (response => {});
axios.delete('/oauth/clients/' + clientId).then(response => {});

const app = new Vue({
    el: '#app',
    // router: router,
    components: {
        Index
    },
    template: '<index></index>'
});
