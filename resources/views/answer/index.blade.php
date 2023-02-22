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
                    Answer
                </th>
                <th scope="col" class="px-6 py-3">
                    recommendation
                </th>
                <th scope="col" class="px-6 py-3">
                </th>


            </tr>
        </thead>
        <tbody>
        @foreach ($answers as $answer)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $answer->id }}
                </th>
                <td class="px-6 py-4">
                {{ $answer->name }}
                </td>
                <td class="px-6 py-4">
                {{ $answer->recommendation }}
                </td>
                <td class="px-6 py-4">
                <a href='answer/{{ $answer->id }}/edit' class="font-medium text-orange-600 dark:text-orange-500 hover:underline">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
