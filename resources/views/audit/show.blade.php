@extends('layouts.app')

@section('content')
    <survey :survey='{{ json_encode($survey) }}' :questions='{{ json_encode($questions) }}'
        :results='{{ json_encode($results) }}' :count={{ $count }} />
@endsection
