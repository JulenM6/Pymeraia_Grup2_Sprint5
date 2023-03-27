@extends('layouts.app')

@section('content')

    <div class="m-5 flex items-center pt-4 justify-between ">
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



    <div class="overflow-x-auto shadow-md sm:rounded-lg m-5">
        <table class="table-auto w-full shadow-lg rounded-lg">
            <thead >
            <tr class="bg-orange-400 text-white">
                <th scope="col" class="px-6 py-3 uppercase">
                    {{__('questionnaire.name')}}
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    {{__('questionnaire.autor')}}
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    {{__('questionnaire.date')}}
                </th>
                <th scope="col" class="px-6 py-3 uppercase">
                    {{__('actions')}}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($questionnaires as $questionnaire)
                <tr class="bg-orange-50 hover:bg-orange-100 text-center">

                    <th scope="row" class="px-6 py-3 uppercase">
                        {{ $questionnaire->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $questionnaire->autor }}
                    </td>
                    <td class="px-6 py-4">
                        {{ date('d-m-Y', strtotime($questionnaire->date)) }}
                    </td>
                    <td class="flex items-center px-6 py-4 space-x-3">
                    <a class="bg-blue-500 hover:bg-blue-700  text-white font-bold py-2 px-2 ml-2 rounded"
                        href="{{route('questionnaire.edit', $questionnaire)}}" aria-label="edit button">
                        <i class="fa-regular fa-pen-to-square "></i>
                    </a>
                    <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 ml-2 rounded "
                        href="{{route('questionnaire.unActivate', $questionnaire)}}" aria-label="hidden button">
                        <i class="fa-regular fa-trash-can"></i>
                    </a>
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
