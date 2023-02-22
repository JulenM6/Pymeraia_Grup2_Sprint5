<template>
    <div class=" max-w-xl mx-auto sm:px-6 my-5 lg:px-8 bg-slate-200 rounded-lg py-2">
        <form action="" id="questionnaire-form" method="POST" v-on:submit.prevent="saveTask()">
            <div hidden>
                @csrf
            </div>

            <div class="grid gap-6 my-6">
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="questionnaire_name">Nombre
                                del Cuestionario</label>
                        </div>
                        <div>
                            <input
                                class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text"
                                name="questionnaire_name"
                                id="questionnaire_name"
                                v-model="questionnaire_name"
                                required autofocus>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="questionnaire_autor">Autor
                                del Cuestionario</label>
                        </div>
                        <select id="questionnaire_autor"
                                name="questionnaire_autor"
                                v-model="questionnaire_autor"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="questionnaire in questionnaires" :value="questionnaire.autor"
                                    :key="questionnaire.id">{{ questionnaire.autor }}
                            </option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="flex justify-center">
                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 dark:hover:bg-gray-600 dark:active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                            type="submit" value="Save"  v-bind:disabled="sending"
                            >
                            Enviar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    props: {
        questionnaires: {
            type: Array,
            default: () => []
        }
    },
    data() {
        return {
            questionnaire_name: '',
            questionnaire_autor: '',
            questionnaire_date: '',
            sending: false,
        }
    },
    mounted() {
        console.log('Component form mounted.')
    },
    methods: {
        saveTask() {
            this.sending = true;

            axios.post('/questionnaire', {
                questionnaire_name: this.questionnaire_name,
                questionnaire_autor: this.questionnaire_autor,
                questionnaire_date: this.questionnaire_date,

            })
                .then(response => {
                    window.location.href = '/questionnaire/' + response.data.id + '/edit';
                })
                .catch(error => {
                    console.log(error.response)
                })

        }
    },
}
</script>

