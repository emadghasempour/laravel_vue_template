import './bootstrap';
import {createApp } from 'vue';
import pinia from "./router/index.js";
import router from "./router/index.js";
import app from './components/App.vue';


createApp(app).use(pinia).use(router).mount('#app')
