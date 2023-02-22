import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import '@mdi/font/css/materialdesignicons.css'
import RouterWeb from './router/index'


import App from "./components/Navbar.vue";
createApp(App).mount("#navbar");

import contacto from "./web/ContactoCom.vue";
const app = createApp({});
app.use(RouterWeb);
app.component('contacto',contacto);
app.mount('#app');


