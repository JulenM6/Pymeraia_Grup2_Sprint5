@extends('layouts.app')

@section('content')
    @if (request('message') == 'success')
        <div
            class="flex w-64 items-center justify-between shadow-md sm:rounded-lg mt-5 mx-auto mb-4 rounded-lg py-5 px-6 text-base bg-green-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-6 h-6 inline-block">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
            </svg>
            {{ __('survey.completed') }}
        </div>
    @endif
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
                        {{ __('table.date') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

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
                            <a href="{{ route('report.show', [$report->id]) }}"
                                class="font-medium text-orange-600 dark:text-orange-500 hover:underline">{{ __('table.show.more') }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Paginación -->
        <div class="p-3 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <div class="row">
                <div class="col-12">
                    {{ $reports->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
