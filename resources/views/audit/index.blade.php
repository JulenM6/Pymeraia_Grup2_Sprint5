@extends('layouts.app')

@section('content')
    <div><create-report :questionnaires='{{ json_encode($questionnaires) }}' :users='{{ json_encode($users) }}' /></div>
    <div class="overflow-x-auto shadow-md sm:rounded-lg m-5">
        <table class="table-auto w-full shadow-lg rounded-lg">
            <thead class="text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="bg-orange-400 text-white">

                    <th scope="col" class="px-6 py-3 uppercase">
                        {{ __('table.id') }}
                    </th>
                    <th scope="col" class="px-6 py-3 uppercase">
                        {{ __('table.name') }}
                    </th>
                    <th scope="col" class="px-6 py-3 uppercase">
                        {{ __('questionnaire.name') }}
                    </th>
                    <th scope="col" class="px-6 py-3 uppercase">
                        {{ __('table.date') }}
                    </th>
                    <th scope="col" class="px-6 py-3 uppercase">
                    </th>


                </tr>
            </thead>
            <tbody>
                @foreach ($audits as $audit)
                    <tr class="bg-orange-50 hover:bg-orange-100 text-center">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900">
                            {{ $audit->id }}
                        </th>
                        <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $audit->name }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $audit->questionnaire->name }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900">
                            {{ $audit->date }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900">
                            <a href="{{ route('audit.survey', [$audit->id]) }}"
                                class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded mt-5 items-center">{{ __('survey.start') }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Paginación -->
        <div class="flex justify-center my-4">
            {{ $audits->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection
