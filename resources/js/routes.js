import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./components/User/Home.vue')
    },
    {
        path: '/about',
        component: require('./components/User/About.vue')
    },
    {
        path: '/dashboard',
        component: require('./components/User/Dashboard.vue')
    }
];

export default new VueRouter({
    routes
});
