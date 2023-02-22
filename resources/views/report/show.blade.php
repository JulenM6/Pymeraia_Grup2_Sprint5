@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class=" overflow-x-auto shadow-md sm:rounded-lg m-5">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    {{__('answer.id')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('answer')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('answer.recommendation')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('question')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('type_measure')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('risk')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('probability')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('intervention')}}
                </th>
                <th scope="col" class="px-6 py-3">
                    {{__('impact')}}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($report as $row)

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $row->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $row->answers }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->recommendation }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->questions }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->type_measures }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->risks }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->probabilities }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->interventions }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $row->impacts }}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <div class="flex justify-end">
        <button class="botonPersonalizado">{{__('share')}}</button>
    </div>

@endsection
