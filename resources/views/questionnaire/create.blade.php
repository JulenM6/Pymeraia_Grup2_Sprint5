@extends('layouts.app')

@section('content')


    <div>
        <questionnaire-component />
    </div>
    <script>
        window.questionnaires = @json($questionnaires);
    </script>
@endsection
