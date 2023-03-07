@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto my-3 py-3 my-6 bg-slate-200 rounded-lg sm:px-6 lg:px-8">
    <div class="overflow-hidden sm:rounded-xl">
        <x-success-status class="mb-4" :status="session('message')" />
        <form action="{{ route('question.update', $question)}}" method="POST">
            @csrf

            @method('put')


            <div class="content-center">
                <div>
                    <div>
                        <x-input-label for="name" :value="__('question.name')" />

                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$question->name}}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <div>
                        <x-input-label for="description" :value="__('question.description')" />

                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{$question->description}}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="grid gap-6 mb-3 md:grid-cols-2 ">
                <div class="grid gap-6 mb-3 md:grid-cols-1">
                    @foreach ($answers as $answer)
                    @if (!$loop->first) {{-- Verifica si no es la primera iteració --}}
                    @continue {{-- Salta a la seguent iteració --}}
                    @endif

                    {{-- Mostra els camps de resposta per al primer regisre --}}
                    <div>
                        <x-input-label for="answer_name_true" :value="__('answer.name')" />

                        <x-text-input id="answer_name_true" class="block mt-1 w-full" type="text" name="answer_name_true" value="{{ $answer->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="reco_true" :value="__('answer.reco')" />

                        <x-text-input id="reco_true" class="block mt-1 w-full" type="text" name="reco_true" value="{{ $answer->recommendation }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="risk_true" :value="__('answer.risk')" />

                        <select name="myselect">
                            @foreach ($risks as $risk_opcions)
                            <option value="{{ $risk_opcions->id }}" @if ($risk_opcions->name == old('myselect', $risk->name))
                                selected="selected"
                                @endif
                                >{{ $risk_opcions->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="type_true" :value="__('answer.type')" />

                        <x-text-input id="type_true" class="block mt-1 w-full" type="text" name="type_true" value="{{ $type->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="inter_true" :value="__('answer.inter')" />

                        <x-text-input id="inter_true" class="block mt-1 w-full" type="text" name="inter_true" value="{{ $intervention->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="prob_true" :value="__('answer.prob')" />

                        <x-text-input id="prob_true" class="block mt-1 w-full" type="text" name="prob_true" value="{{ $probability->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="imp_true" :value="__('answer.imp')" />

                        <x-text-input id="imp_true" class="block mt-1 w-full" type="text" name="imp_true" value="{{ $impact->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                </div>

                <div class="grid gap-6 mb-3 md:grid-cols-1">
                    {{-- Si hi ha més d'un registre, mostra els camps de respssta per al segon registres --}}
                    @if ($answers->count() > 1)
                    <div>
                        <x-input-label for="answer_name_false" :value="__('answer.name')" />

                        <x-text-input id="answer_name_false" class="block mt-1 w-full" type="text" name="answer_name_false" value="{{ $answers[1]->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="reco_false" :value="__('answer.reco')" />

                        <x-text-input id="reco_false" class="block mt-1 w-full" type="text" name="reco_false" value="{{ $answers[1]->recommendation }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="risk_false" :value="__('answer.risk')" />

                        <select name="myselect">
                            @foreach ($risks as $risk_opcions)
                            <option value="{{ $risk_opcions->id }}" @if ($risk_opcions->name == old('myselect', $risk1->name))
                                selected="selected"
                                @endif
                                >{{ $risk_opcions->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="type_false" :value="__('answer.type')" />

                        <x-text-input id="type_false" class="block mt-1 w-full" type="text" name="type_false" value="{{ $type1->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="inter_false" :value="__('answer.inter')" />

                        <x-text-input id="inter_false" class="block mt-1 w-full" type="text" name="inter_false" value="{{ $intervention1->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="prob_false" :value="__('answer.prob')" />

                        <x-text-input id="prob_false" class="block mt-1 w-full" type="text" name="prob_false" value="{{ $probability1->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="imp_false" :value="__('answer.imp')" />

                        <x-text-input id="imp_false" class="block mt-1 w-full" type="text" name="imp_false" value="{{ $impact1->name }}" required autofocus />

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    @endif
                    @endforeach
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