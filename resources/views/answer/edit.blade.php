@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center  ">
        <div class="row  m-6 border-2 rounded-md bg-slate-200">
            <div class="col-md-12 m-6">
                <div class="card max-w-6xl">
                    <div class="card-body">
                        <form action="{{ route('answer.update', $answer) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="w-10/12">
                                <div class="form-group mb-3">
                                    <label for="">{{__('question.name')}}</label>
                                    <input
                                        class="mt-1 w-full  rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="name" value="{{$answer->name}}">
                                </div>
                            </div>
                            <div class="w-10-12">
                                <div class="form-group mb-3">
                                    <label for="">{{__('recommendation')}}</label>
                                    <textarea
                                        class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        type="text" name="recommendation"
                                        value="{{$answer->recommendation}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit"
                                        class="btn border-solid border-2 border-orange-500 p-2 rounded-md  ">{{__('update.answer')}}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
