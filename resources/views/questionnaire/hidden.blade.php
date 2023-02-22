@extends('layouts.app')

@section('content')

    <div class="overflow-x-auto max-w-4xl mx-auto  sm:rounded-lg m-5">
        <div class="flex items-center justify-end">
            <x-button-link href="{{route('questionnaire.index')}}">
                {{__('questionnaire.active')}}
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
                    {{__('questionnaire.date.inactivate')}}
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
                <td class="px-6 py-4">
                    {{ $questionnaire->hidden }}
                </td>
                <td class="flex items-center px-6 py-4 space-x-3">
                    <x-button-edit href="{{route('questionnaire.edit', $questionnaire)}}">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </x-button-edit>
                    <x-button-activate href="{{route('questionnaire.activate', $questionnaire)}}">
                        <i class="fa-solid fa-arrow-up"></i>
                    </x-button-activate>
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
