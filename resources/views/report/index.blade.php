@extends('layouts.app')

@section('content')
<div class=" overflow-x-auto shadow-md sm:rounded-lg m-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>

                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                </th>


            </tr>
        </thead>
        <tbody>
        @foreach ($reports as $report)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $report->id }}
                </th>
                <td class="px-6 py-4">
                {{ $report->name }}
                </td>
                <td class="px-6 py-4">
                {{ $report->date }}
                </td>
                <td class="px-6 py-4">
                <a href="{{ route('report.show', [$report->id]) }}" class="font-medium text-orange-600 dark:text-orange-500 hover:underline">Ver mas</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
