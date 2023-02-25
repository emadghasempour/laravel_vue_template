import Home from "../components/Home.vue";
import {createRouter, createWebHashHistory} from "vue-router";

const routes = [
    { path: '/', component: Home, name: 'Home' },
]

const router = createRouter({
    history: createWebHashHistory(),
    routes: routes,
})

export default router;
