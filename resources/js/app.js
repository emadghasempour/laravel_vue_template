import './bootstrap';
import {createApp} from 'vue';

import router from "./router/index.js";
import app from './components/App.vue';
import {createPinia} from "pinia";

const p = createPinia()
createApp(app).use(p).use(router).mount('#app')
