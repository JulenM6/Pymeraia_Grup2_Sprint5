@extends('layouts.app')

@section('content')
    <div class=" overflow-x-auto sm:rounded-lg m-5">
        <table class="table-auto w-full shadow-lg rounded-lg">
            <thead>
                <tr class="bg-orange-400 text-white">

                    <th scope="col" class="px-6 py-3 uppercase">
                        {{ __('table.id') }}
                    </th>
                    <th scope="col" class="px-6 py-3 uppercase">
                        {{ __('table.name') }}
                    </th>
                    <th scope="col" class="px-6 py-3 uppercase">
                        {{ __('table.date') }}
                    </th>
                    <th scope="col" class="px-6 py-3 uppercase">
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    <tr class="bg-orange-400 text-white">

                        <th scope="row"  class="px-6 py-3 uppercase">
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
