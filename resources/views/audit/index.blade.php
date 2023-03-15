@extends('layouts.app')

@section('content')
    <div class="overflow-x-auto shadow-md sm:rounded-lg m-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>

                    <th scope="col" class="px-6 py-3">
                        {{ __('table.id') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('table.name') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('questionnaire.name') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('table.date') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($audits as $audit)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $audit->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $audit->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $audit->questionnaire->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $audit->date }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('audit.survey', [$audit->id]) }}"
                                class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded mt-5 items-center">{{ __('survey.start') }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Paginación -->
        <div class="p-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <div class="row">
                <div class="col-12">
                    {{ $audits->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
