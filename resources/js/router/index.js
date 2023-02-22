import {createRouter, createWebHistory} from 'vue-router';


const ContactoComponent = () => import ('../web/ContactoCom.vue');
const formComponent = () => import ('../components/form.vue');
const Questionnaire_FormComponent = () => import ('../components/questionnaire_form.vue');

const test = () => import ('../web/test.vue');
const routes = [
    {path: '/patata', name: 'patata', component: ContactoComponent},
    {path: '/test', name: 'test', component: ContactoComponent},
    {path: '/form', name: 'form', component: formComponent},
    {path: '/questionnaire/create', name: 'create', component: Questionnaire_FormComponent, props: { questionnaires: window.questionnaires }},
    {path: '/question/create', name: 'form', component: formComponent, props: { risks: window.risks, interventions : window.interventions, type_measures : window.type_measures, probabilities : window.probabilities, impacts : window.impacts }},

//    {path: '/test', name: 'test', component: test}
];
const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes
});
export default router;
