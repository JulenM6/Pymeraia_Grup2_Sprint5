@extends('layouts.app')

@section('content')


    <div>
        <questionnaire-component :questionnaires='{{json_encode($questionnaires)}}' />
    </div>

@endsection
