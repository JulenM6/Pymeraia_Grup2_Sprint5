<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
        integrity="sha512-fEbbx62zKbG2tvw3qPb3Itb0Nl1hdjKbW8qzv9Mwea7pzF1HzsDd7VvKebt97J7tG/DiQKzI8vGdQVDz7fJrLg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Informe </title>
</head>

<body>
    <img src="{{ public_path('img/logoPymeShield.png') }}">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">{{ __('table.id') }}</th>
                    <th scope="col" class="px-6 py-3">{{ __('report.answer') }}</th>
                    <th scope="col" class="px-6 py-3">{{ __('report.recommendation') }}</th>
                    <th scope="col" class="px-6 py-3">{{ __('report.question') }}</th>
                    <th scope="col" class="px-6 py-3">{{ __('report.type.measure') }}</th>
                    <th scope="col" class="px-6 py-3">{{ __('report.risk') }}</th>
                    <th scope="col" class="px-6 py-3">{{ __('report.probability') }}</th>
                    <th scope="col" class="px-6 py-3">{{ __('report.intervention') }}</th>
                    <th scope="col" class="px-6 py-3">{{ __('report.impact') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($report as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td class="px-6 py-4">{{ $row->answers }}</td>
                        <td class="px-6 py-4">{{ $row->recommendation }}</td>
                        <td class="px-6 py-4">{{ $row->questions }}</td>
                        <td class="px-6 py-4">{{ $row->type_measures }}</td>
                        <td class="px-6 py-4">{{ $row->risks }}</td>
                        <td class="px-6 py-4">{{ $row->probabilities }}</td>
                        <td class="px-6 py-4">{{ $row->interventions }}</td>
                        <td class="px-6 py-4">{{ $row->impacts }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer class="bg-gray-900 py-8 text-center">
        <div>
            <div class="text-white">
                {{-- <img src="{{ public_path('img/logo_pymeshield_black.png') }}" alt="Logo" class="w-16"> --}}
            </div>
            <div class="text-white">
                <h6 class="font-bold text-lg ">{{ __('footer.contact') }}</h6>
                <ul class="mt-4 ">
                    <li><a href="tel:682849274" class="text-lg">682849274</a>
                    &nbsp;&nbsp;&nbsp;&nbsp; 
                    <a href="mailto:support@pymeshield.com" class="text-lg">info@pymeshield.com</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>

</html>
