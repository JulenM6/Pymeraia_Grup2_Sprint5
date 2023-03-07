<template>
    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="overflow-hidden max-w-3xl bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-base font-semibold leading-6 text-gray-900">{{ survey.name }}</h3>
                <p class="mt-1 max-w-3xl text-sm text-gray-500">Personal details and application.</p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>
                            Pregunta</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">test</dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>
                            Respuesta</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <div class="flex items-center mb-4">
                                <input id="anwser-1" type="radio" name="answers" value=""
                                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-orange-300 dark:focus:ring-orange-600 dark:focus:bg-orange-600 dark:bg-gray-700 dark:border-gray-600"
                                    checked>
                                <label for="answer-1"
                                    class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Sí
                                </label>
                            </div>

                            <div class="flex items-center">
                                <input id="answer-2" type="radio" name="answers" value=""
                                    class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-orange-300 dark:focus:ring-orange-600 dark:focus:bg-orange-600 dark:bg-gray-700 dark:border-gray-600">
                                <label for="answer-2"
                                    class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    No
                                </label>
                            </div>
                        </dd>

                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Quedan</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">3 de 10</dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:gap-4 sm:px-6">
                        <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                style="width: 45%">45%</div>
                        </div>
                    </div>
                </dl>
            </div>
            <div class="p-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <div class="row">
                    <div class="col-12">
                        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between"><span
                                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                                « Previous </span><a href="#" rel="next"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                Next » </a></nav>
                    </div>
                </div>
            </div>
            <div>
    <div v-for="(question, index) in questions" :key="question.id">
      <h3>{{ question.description }}</h3>
      <ul>
        <li v-for="(answer, index) in question.answers" :key="answer.id">
          {{ answer.id }}
        </li>
      </ul>
    </div>
  </div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
  survey: Object,
  questions: Object
})
</script>
