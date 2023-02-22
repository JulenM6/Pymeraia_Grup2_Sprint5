@extends('layouts.app')

@section('content')
    <div>
        <router-view></router-view>
    </div>
    <script>
        window.questionnaires = @json($questionnaires);
    </script>
@endsection
