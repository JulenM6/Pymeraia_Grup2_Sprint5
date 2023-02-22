@extends('layouts.app')

@section('content')
    <div>
        <router-view></router-view>
    </div>
    <script>
        window.risks = @json($risks);
        window.interventions = @json($interventions);
        window.type_measures = @json($type_measures);
        window.probabilities = @json($probabilities);
        window.impacts = @json($impacts);
    </script>
@endsection
