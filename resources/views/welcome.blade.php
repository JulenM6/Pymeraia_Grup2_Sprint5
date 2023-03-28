@extends('layouts.app')

@section('content')
    <h3>Consell del dia(Petició a API externa):</h3>
    <div id="api-container" class="p-5"></div>

    <script>
        fetch('https://jsonplaceholder.typicode.com/comments/1')
            .then((response) => response.json())
            .then((json) => {
                const apiContainer = document.getElementById('api-container');
                apiContainer.innerHTML = `<p>${json.body}</p>`;
            });
    </script>
@endsection
