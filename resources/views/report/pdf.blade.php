@extends('layouts.app')

@section('content')
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{ __('table.id') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('report.answer') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('report.recommendation') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('report.question') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('report.type.measure') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('report.risk') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('report.probability') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('report.intervention') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('report.impact') }}
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($report as $row)
                    <tr>

                        <th scope="row">
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
@endsection
