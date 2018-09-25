import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        name: 'top',
        components: {
            default: require('./components/Index.vue'),
        }
    },
    {
        path: '/users',
        name: 'user',
        components: {
            default: require('./components/User/Index.vue'),
            menu :  require('./components/User/Menubar.vue')
        }
    },
    {
        path: '/users/edit',
        name: 'edit',
        components: {
            default: require('./components/User/Edit.vue'),
            menu :  require('./components/User/Menubar.vue')
        }
    },
    {
        path: '/users/delete',
        name: 'delete',
        components: {
            default: require('./components/User/Delete.vue'),
            menu :  require('./components/User/Menubar.vue')
        }
    },
];

export default new VueRouter({
    routes
});
