import { createApp, defineAsyncComponent } from "vue/dist/vue.esm-bundler";
import { createI18n } from 'vue-i18n'
import '@mdi/font/css/materialdesignicons.css'
import messages from '@intlify/unplugin-vue-i18n/messages'


const app = createApp({})

//registramos los componentes
const navbar = defineAsyncComponent(() => import('./components/Navbar.vue'));
app.component('navbar', navbar);

const contactComponent = defineAsyncComponent(() => import('./web/ContactoCom.vue'));
app.component('contact-component', contactComponent);

const formComponent = defineAsyncComponent(() => import('./components/form.vue'));
app.component('form-component', formComponent);

const questionnaireFormComponent = defineAsyncComponent(() => import('./components/questionnaire_form.vue'));
app.component('questionnaire-component', questionnaireFormComponent);

const survey = defineAsyncComponent(() => import('./components/survey.vue'));
app.component('survey', survey);

const i18n = createI18n({
    locale: 'es',
    messages,
  })

// se monta la app
app.use(i18n).mount('#app')
