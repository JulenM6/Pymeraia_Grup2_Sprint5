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
                            <label class="block font-medium text-label text-gray-700" for="question">{{ $t('question') }}</label>
                        </div>
                        <div>
                            <input
                                class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text"
                                name="question"
                                id="question"
                                v-model="pregunta"
                                required autofocus>
                        </div>

                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="description">Descripcion</label>
                        </div>
                        <div>
                            <input
                                class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text"
                                name="description"
                                id="description"
                                v-model="description"
                                required autofocus>
                        </div>
                    </div>
                </div>

            <details>
                <summary>Respuesta Afirmativa</summary>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="recommendation_true">Recomendacion TRUE</label>
                        </div>
                        <div>
                            <input
                                class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text"
                                name="recommendation_true"
                                id="recommendation_true"
                                v-model="recommendation_true"
                                required autofocus>
                        </div>
                    </div>
                </div>


                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="risk_true">Riesgo TRUE</label>
                        </div>
                        <select id="risk_true"
                                name="risk_true"
                                v-model="risk_true"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="risk in risks" :value="risk.id"
                                    :key="risk.id">{{ risk.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="intervention_true">Intervencion TRUE</label>
                        </div>
                        <select id="intervention_true"
                                name="intervention_true"
                                v-model="intervention_true"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="intervention in interventions" :value="intervention.id"
                                    :key="intervention.id">{{ intervention.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="measure_true">Tipo de medida TRUE</label>
                        </div>
                        <select id="measure_true"
                                name="measure_true"
                                v-model="measure_true"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="type_measure in type_measures" :value="type_measure.id"
                                    :key="type_measure.id">{{ type_measure.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="probability_true">Probabilidad TRUE</label>
                        </div>
                        <select id="probability_true"
                                name="probability_true"
                                v-model="probability_true"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="probability in probabilities" :value="probability.id"
                                    :key="probability.id">{{ probability.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="impact_true">Impacto TRUE</label>
                        </div>
                        <select id="impact_true"
                                name="impact_true"
                                v-model="impact_true"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="impact in impacts" :value="impact.id"
                                    :key="impact.id">{{ impact.name }}
                            </option>
                        </select>
                    </div>
                </div>
            </details>
            <details>
                <summary>Respuesta Negativa</summary>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="recommendation_false">Recomendacion FALSE</label>
                        </div>
                        <div>
                            <input
                                class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                type="text"
                                name="recommendation_false"
                                id="recommendation_false"
                                v-model="recommendation_false"
                                required autofocus>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="risk_false">Riesgo FALSE</label>
                        </div>
                        <select id="risk_false"
                                name="risk_false"
                                v-model="risk_false"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="risk in risks" :value="risk.id"
                                    :key="risk.id">{{ risk.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="intervention_false">Intervencion FALSE</label>
                        </div>
                        <select id="intervention_false"
                                name="intervention_false"
                                v-model="intervention_false"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="intervention in interventions" :value="intervention.id"
                                    :key="intervention.id">{{ intervention.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="measure_false">Tipo de medida FALSE</label>
                        </div>
                        <select id="measure_false"
                                name="measure_false"
                                v-model="measure_false"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="type_measure in type_measures" :value="type_measure.id"
                                    :key="type_measure.id">{{ type_measure.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="probability_false">Probabilidad FALSE</label>
                        </div>
                        <select id="probability_false"
                                name="probability_false"
                                v-model="probability_false"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="probability in probabilities" :value="probability.id"
                                    :key="probability.id">{{ probability.name }}
                            </option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div class="w-10/12">
                        <div>
                            <label class="block font-medium text-label text-gray-700" for="impact_false">Impacto FALSE</label>
                        </div>
                        <select id="impact_false"
                                name="impact_false"
                                v-model="impact_false"
                                class="rounded-md shadow-sm border-gray-300 block mt-1 w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="" selected>Elige una Opción</option>
                            <option v-for="impact in impacts" :value="impact.id"
                                    :key="impact.id">{{ impact.name }}
                            </option>
                        </select>
                    </div>
                </div>
                </details>





                <div>
                    <div class="flex justify-center">
                        <button
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-600 active:bg-gray-900 dark:hover:bg-gray-600 dark:active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                            type="submit" value="Save" v-bind:disabled="sending" >Enviar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</template>
<script>
    import axios from 'axios';
    // en export default en la funcion data tenemos que crear un objeto con las variables que recogeremos del componente
    export default {
        props: {
            risks: {
                type: Array,
                default: () => []
            },
            interventions: {
                type: Array,
                default: () => []
            },
            type_measures: {
                type: Array,
                default: () => []
            },
            probabilities: {
                type: Array,
                default: () => []
            },
            impacts: {
                type: Array,
                default: () => []
            }

        },
        data() {
            return {
                pregunta: '',
                description: '',

                recommendation_true: '',
                risk_true: '',
                intervention_true: '',
                measure_true: '',
                probability_true: '',
                impact_true: '',

                recommendation_false: '',
                risk_false: '',
                intervention_false: '',
                measure_false: '',
                probability_false: '',
                impact_false: '',
                sending: false
            }
        },
        mounted() {
            console.log('Component form mounted.')
        },
        methods: {
            saveTask() {
                this.sending = true;
                axios.post('/question', {name: this.pregunta, description: this.description, recommendation_true: this.recommendation_true, risk_true: this.risk_true, intervention_true: this.intervention_true, measure_true: this.measure_true, probability_true: this.probability_true, impact_true: this.impact_true, recommendation_false: this.recommendation_false, risk_false: this.risk_false, intervention_false: this.intervention_false, measure_false: this.measure_false, probability_false: this.probability_false, impact_false: this.impact_false })
                .then(response => {
                    window.location.href = '/question';
                })
                .catch(error => {
                    console.log(error.response)
                })

            }
            // Verificamos los datos: del form
            // verificate: function(){
            //     const params = {
            //         question: this.question,
            //         true: this.true,
            //         false: this.false
            //     };
            //         q_lenght=this.question.lenght
            //         t_lenght=this.true.lenght
            //         f_lenght=this.false.lenght
            //     // Si se llenan todos los campos
            //     if(this.question&&this.true&&this.false){
            //         check=0;
            //         // Comprovamos que no se inyecta codigo
            //         if(q_lenght=>150){
            //             this.errors.push('Has de fer una pregunta mes breu.');
            //         }else{
            //             check=1;
            //         }
            //         if(t_lenght=>100){
            //             this.errors.push('Recomanació masa llarga.');
            //         }else{
            //             check++;
            //         }
            //         if(f_lenght=>100){
            //             this.errors.push('Recomanació masa llarga.');
            //         }else{
            //             check++;
            //         }
            //         // En caso de que no supere el limite de caracteres ninguno de los datos
            //         if (check===3){
            //             axios.post('/question', params)
            //             .then((response) => {
            //             const question = response.data;
            //             console.log(question);
            //             this.$emit('create', question);

            //             });
            //         }
            //     }
            //     this.errors = [];

            //     if (!this.question) {
            //         this.errors.push('Es impresindible una pregunta');
            //     }
            //     if (!this.true) {
            //         this.errors.push('En cas de si... Que recomanes?');
            //     }
            //     if (!this.false) {
            //         this.errors.push('En cas de no... Que recomanes?');
            //     }

            // }
        }
    }
</script>
