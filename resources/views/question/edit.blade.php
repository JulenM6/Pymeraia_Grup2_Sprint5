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
                    @foreach ($answers as $answer)
    @if (!$loop->first) {{-- Verifica si no es la primera iteración --}}
        @continue  {{-- Salta a la siguiente iteración --}}
    @endif

    {{-- Muestra los campos de respuesta para el primer registro --}}
    <div>
        <x-input-label for="name" :value="__('answer.name')" />

        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $answer->name }}" required autofocus />

        <x-input-error :messages="$errors->get('text')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="name" :value="__('answer.risk')" />

        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $risk->name }}" required autofocus />

        <x-input-error :messages="$errors->get('text')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="name" :value="__('answer.type')" />

        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $answer->type_measure_id }}" required autofocus />

        <x-input-error :messages="$errors->get('text')" class="mt-2" />
    </div>

    {{-- Si hay más de un registro, muestra los campos de respuesta para el segundo registro --}}
    @if ($answers->count() > 1)
        <div>
            <x-input-label for="name" :value="__('answer.name')" />

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $answers[1]->name }}" required autofocus />

            <x-input-error :messages="$errors->get('text')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('answer.risk')" />

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $risk1->name }}" required autofocus />

            <x-input-error :messages="$errors->get('text')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="name" :value="__('answer.type')" />

            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $answers[1]->type_measure_id }}" required autofocus />

            <x-input-error :messages="$errors->get('text')" class="mt-2" />
        </div>
    @endif
@endforeach
                    
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
