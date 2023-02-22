@extends('layouts.app')

@section('content')

    <div class=" max-w-4xl mx-auto flex items-center pt-4 justify-between ">
        <div>
            <x-button-link href="{{route('questionnaire.create')}}">
                <i class="fa-solid fa-plus mr-2"></i>
                {{__('questionnaire.create')}}
            </x-button-link>
        </div>
        <div class="flex items-center justify-end">
            <x-button-link href="{{route('questionnaire.hidden')}}">
                {{__('questionnaire.unactive')}}
            </x-button-link>
        </div>
    </div>



    <div class="overflow-x-auto max-w-4xl mx-auto shadow-md sm:rounded-lg m-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{__('questionnaire.name')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('questionnaire.autor')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('questionnaire.date')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('actions')}}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($questionnaires as $questionnaire)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $questionnaire->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $questionnaire->autor }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $questionnaire->date }}
                    </td>
                    <td class="flex items-center px-6 py-4 space-x-3">
                        <x-button-edit href="{{route('questionnaire.edit', $questionnaire)}}">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </x-button-edit>
                        <x-button-unactivate href="{{route('questionnaire.unActivate', $questionnaire)}}">
                            <i class="fa-solid fa-arrow-down"></i>
                        </x-button-unactivate>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="p-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <div class="row">
                <div class="col-12">
                    {{ $questionnaires->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
