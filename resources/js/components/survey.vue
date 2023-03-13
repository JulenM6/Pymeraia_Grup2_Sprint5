<template>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="overflow-hidden max-w-3xl bg-white shadow sm:rounded-lg">
            <!-- datos de la encuesta -->
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-base font-semibold leading-6 text-gray-900">Nombre auditoría: {{ survey.name }}</h3>
                <p class="mt-1 max-w-3xl text-sm text-gray-500">Otros datos</p>
            </div>
            <div class="border-t border-gray-200">
                <dl v-for="question in paginatedQuestions" :key="question.id">
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>
                            Pregunta</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ question.description }}</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            Respuesta</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <div v-for="(answer, index) in question.answers" :key="answer.id"
                                class="flex items-center mb-4">
                                <input :id="'respuesta-' + index" type="radio"
                                    :value="answer.id"
                                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-orange-300 dark:focus:ring-orange-600 dark:focus:bg-orange-600 dark:bg-gray-700 dark:border-gray-600"
                                    @change="selectAnswer(answer.id)" :checked="answers.includes(answer.id)">
                                <label :for="answer.id"
                                    class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    {{ answer.name }}
                                </label>
                            </div>
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Porcentaje</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ percentageAnswered }} %
                        </dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:gap-4 sm:px-6">
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                :style="'width: ' + percentageAnswered + '%'"></div>
                        </div>
                    </div>
                </dl>

                <!-- paginación -->
                <div class="p-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <div class="row">
                        <div class="col-12">
                            <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
                                <button
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                    :class="{ 'opacity-50 cursor-not-allowed': currentPage === 1 }"
                                    :disabled="currentPage === 1" @click="currentPage--">Prev</button>
                                <button
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                                    :class="{ 'opacity-50 cursor-not-allowed': currentPage === pageCount }"
                                    :disabled="currentPage === pageCount" @click="currentPage++">Next</button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, computed, watch } from 'vue'
import axios from 'axios'
// propiedades para pasarle datos desde controlador laravel
const props = defineProps({
    survey: Object,
    questions: Object,
})

// variables para paginación
const currentPage = ref(1)
const perPage = ref(1)
const pageCount = computed(() => Math.ceil(props.questions.length / perPage.value))
// guardo las respuestas
const answers = ref(JSON.parse(localStorage.getItem('answers')) || []);
console.log(answers.value)
function selectAnswer(answerId) {
    const index = answers.value.findIndex(answer => answer.currentPage === currentPage.value)

    if (index !== -1) {
        answers.value[index].answerId = answerId
        console.log(answers.value)
    } else {
        answers.value.push({ currentPage: currentPage.value, answerId })
        console.log(answers.value)
    }

    localStorage.setItem('answers', JSON.stringify(answers.value))
}

// calcular paginación
const paginatedQuestions = computed(() => {
    const start = (currentPage.value - 1) * perPage.value
    const end = start + perPage.value
    return props.questions.slice(start, end)
})

watch(currentPage, () => {
    const start = (currentPage.value - 1) * perPage.value
    const end = start + perPage.value
    paginatedQuestions.value = props.questions.slice(start, end)
})

// calcular el porcentage de respuestas contestadas
const percentageAnswered = computed(() => {
    return Math.round((answers.value.length / props.questions.length) * 100);
});

// enviar la respuesta o actualizar
async function submitAnswer(answerId) {
    try {
        const response = await axios.post('/audit', {
            reportId: reportId,
            answerId: answerId
        });

        const data = response.data;

        // Handle response from server here
    } catch (error) {
        console.error(error);
    }
}
</script>
