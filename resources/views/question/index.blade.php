@extends('layouts.app')

@section('content')
<div class=" max-w-4xl mx-auto flex items-center pt-4 justify-between ">
        <div>
            <x-button-link href="{{route('question.create')}}">
                <i class="fa-solid fa-plus mr-2"></i>
                {{__('question.create')}}
            </x-button-link>
        </div>
        <div class="flex items-center justify-end">
            <x-button-link href="{{route('question.hidden')}}">
                {{__('question.unactive')}}
            </x-button-link>
        </div>
    </div>
    <div class="overflow-x-auto max-w-4xl mx-auto shadow-md sm:rounded-lg m-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{__('question.name')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('question.description')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('actions')}}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($questions as $question)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $question->name }}
                    </th>
                    <th class="px-6 py-4">
                        {{ $question->description }}
                    </th>
                    <th class="flex items-center px-6 py-4 space-x-3">
                        <x-button-edit class="openModal" href="{{route('question.edit', $question)}}" >
                            <i class="fa-regular fa-pen-to-square "></i>
                        </x-button-edit>
                        <x-button-unactivate href="{{route('question.unActivate', $question)}}">
                            <i class="fa-solid fa-arrow-down"></i>
                        </x-button-unactivate>
                    </th>
                </tr>
            @endforeach

    <!-- This example requires Tailwind CSS v2.0+ -->

            </tbody>
        </table>

        <div class="p-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <div class="row">
                <div class="col-12">
                    {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection

