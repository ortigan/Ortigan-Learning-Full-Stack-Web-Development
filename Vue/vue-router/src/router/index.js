import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
//

Vue.use(VueRouter)

const routes = [{
        path: '/',
        name: 'Home',
        component: Home
    },

    //Best way to use components
    {
        path: '/about',
        name: 'About',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: () =>
            import ( /* webpackChunkName: "about" */ '../views/About.vue')
    },
    {
        path: '/contact',
        component: () =>
            import ('../views/Contact.vue')
    },
    {
        path: '/users',
        component: () =>
            import ('../views/Users.vue')
    },
    {
        path: '/users/:id',
        component: () =>
            import ('../views/SingleUser.vue')
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router