@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto overflow-x-auto shadow-md sm:rounded-lg m-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    answers
                </th>
                <th scope="col" class="px-6 py-3">
                    recommendation
                </th>
                <th scope="col" class="px-6 py-3">
                   questions
                </th>
                <th scope="col" class="px-6 py-3">
                   type_measures
                </th>
                <th scope="col" class="px-6 py-3">
                   risk
                </th>
                <th scope="col" class="px-6 py-3">
                   probabilities
                </th>
                <th scope="col" class="px-6 py-3">
                   interventions
                </th>
                <th scope="col" class="px-6 py-3">
                   impacts
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
    <button>Share</button>
</div>

@endsection
