import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import { createI18n } from 'vue-i18n'
import '@mdi/font/css/materialdesignicons.css'
import RouterWeb from './router/index'
import es from '../../lang/es.json'


import App from "./components/Navbar.vue";
createApp(App).mount("#navbar");

import contacto from "./web/ContactoCom.vue";
const app = createApp({});
app.use(RouterWeb);
app.component('contacto',contacto);


const i18n = createI18n({
  locale: 'es',
  messages: {
    es,
  }
})
app.use(i18n).mount('#app')


