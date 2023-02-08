require('./bootstrap');

import Vue from 'vue';
import App from './App';
import VueRouter from 'vue-router'; // importazione vue-router
import PageHome from './pages/PageHome';


Vue.use(VueRouter); // diciamo a vue di usare il plugin vue-router

const routes = [ // creiamo le nostre specifiche rotte
    {
        path: '/countries',
        name: 'home',
        component: PageHome,
    },
    // {
    //     path: '*',
    //     name: 'page404',
    //     component: Page404,
    // }
];

// personalizzazione del vue-router
const router = new VueRouter({
    mode: 'history', // toglie l'# dagli indirizzi ma richiede delle modifiche lato server
    routes, // routes: routes
});

new Vue({
    el: '#root',
    render: h => h(App), // renderizzare App nella #root
    // usare vue-router specifico al nostro progetto
    router // router: router
});
