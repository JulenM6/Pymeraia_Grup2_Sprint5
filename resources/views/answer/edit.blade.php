@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center ">
    <div class="row  m-6 border-2 rounded-md">
        <div class="col-md-12 m-6">

            <!-- @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif -->

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('answer.update', $answer) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">{{__('report.answer')}}</label>
                            <input type="text" name="name" value="{{$answer->name}}" class="form-control m-2">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">{{__('report.recommendation')}}</label>
                            <input type="text" name="recommendation" value="{{$answer->recommendation}}" class="form-control m-2">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn border-solid border-2 border-orange-500 p-2 rounded-md  ">{{__('table.update')}}</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
