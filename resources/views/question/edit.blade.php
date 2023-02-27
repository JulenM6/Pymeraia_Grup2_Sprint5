@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto my-3 py-3 my-6 bg-slate-200 rounded-lg sm:px-6 lg:px-8">
        <div class="overflow-hidden sm:rounded-xl">
            <x-success-status class="mb-4" :status="session('message')"/>
            <form action="{{ route('question.update', $question)}}" method="POST">
                @csrf

                @method('put')

                <div class="grid gap-6 mb-3 md:grid-cols-1">
                    <div>
                        <x-input-label for="name"  :value="__('question.name')"/>

                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                      value="{{$question->name}}" required autofocus/>

                        <x-input-error :messages="$errors->get('text')" class="mt-2"/>
                    </div>

                    <div>
                        <x-input-label for="description"  :value="__('question.description')"/>

                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                                      value="{{$question->description}}" required autofocus/>

                        <x-input-error :messages="$errors->get('text')" class="mt-2"/>
                    </div>
                    <div>
                        <x-input-label for="recommendation"  :value="__('question.recommendation')"/>

                        <x-text-input id="recommendation" class="block mt-1 w-full" type="text" name="recommendation"
                                      value="{{$question->recommendation}}" required autofocus/>

                        <x-input-error :messages="$errors->get('text')" class="mt-2"/>
                    </div>
                    <div>
                        <x-primary-button>
                            {{ __('savechanges') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
