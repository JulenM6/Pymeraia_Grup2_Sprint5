import { createApp, defineAsyncComponent } from "vue/dist/vue.esm-bundler";
import '@mdi/font/css/materialdesignicons.css'
import { i18nVue } from 'laravel-vue-i18n'
import AxiosPlugin from '../js/plugin-axios/plugins/axios-plugin';




const app = createApp()

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

app.use(AxiosPlugin);

// se monta la app
app.use(i18nVue, {
    resolve: async lang => {
        const langs = import.meta.glob('../../lang/*.json');
        return await langs[`../../lang/${lang}.json`]();
    }
}).mount('#app')
