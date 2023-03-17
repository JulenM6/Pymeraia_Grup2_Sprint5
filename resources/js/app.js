import { createApp, defineAsyncComponent } from "vue/dist/vue.esm-bundler";
import '@mdi/font/css/materialdesignicons.css'
import { i18nVue } from 'laravel-vue-i18n'
import AxiosPlugin from '../js/plugin-axios/plugins/axios-plugin';




const app = createApp()

//registramos los componentes
const navbar = defineAsyncComponent(() => import('./components/Navbar.vue'));
app.component('navbar', navbar);

const formComponent = defineAsyncComponent(() => import('./components/Form.vue'));
app.component('form-component', formComponent);

const questionnaireFormComponent = defineAsyncComponent(() => import('./components/QuestionnaireForm.vue'));
app.component('questionnaire-component', questionnaireFormComponent);

const survey = defineAsyncComponent(() => import('./components/Survey.vue'));
app.component('survey', survey);

const createReport = defineAsyncComponent(() => import('./components/CreateReport.vue'));
app.component('create-report', createReport);

app.use(AxiosPlugin);

// se monta la app
app.use(i18nVue, {
    resolve: async lang => {
        const langs = import.meta.glob('../../lang/*.json');
        return await langs[`../../lang/${lang}.json`]();
    }
}).mount('#app')
