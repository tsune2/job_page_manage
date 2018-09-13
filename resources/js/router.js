import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import JobDatailComponent from './components/JobDatailComponent.vue'

export default new VueRouter({
    mode: 'history',
    routes: [{
        path: '/job/:hash/:jobId',
        component: JobDatailComponent
    }]
});
