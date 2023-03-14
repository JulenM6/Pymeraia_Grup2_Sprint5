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

                        <select name="risk_true" id="risk_true">
                            @foreach ($risks as $risk_opcions)
                            <option value="{{ $risk_opcions->id }}" @if ($risk_opcions->name == $risk->name)
                                selected="selected"
                                @endif
                                >{{ $risk_opcions->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="type_true" :value="__('answer.type')" />

                        <select name="type_true">
                            @foreach ($types as $type_opcions)
                            <option value="{{ $type_opcions->id }}" @if ($type_opcions->name == old('type_true', $type->name))
                                selected="selected"
                                @endif
                                >{{ $type_opcions->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="inter_true" :value="__('answer.inter')" />

                        <select name="inter_true">
                            @foreach ($interventions as $inter_opcions)
                            <option value="{{ $inter_opcions->id }}" @if ($inter_opcions->name == old('inter_true', $intervention->name))
                                selected="selected"
                                @endif
                                >{{ $inter_opcions->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="prob_true" :value="__('answer.prob')" />

                        <select name="prob_true">
                            @foreach ($probabilities as $prob_opcions)
                            <option value="{{ $prob_opcions->id }}" @if ($prob_opcions->name == old('prob_true', $probability->name))
                                selected="selected"
                                @endif
                                >{{ $prob_opcions->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="imp_true" :value="__('answer.imp')" />

                        <select name="imp_true">
                            @foreach ($impacts as $imp_opcions)
                            <option value="{{ $imp_opcions->id }}" @if ($imp_opcions->name == old('imp_true', $impact->name))
                                selected="selected"
                                @endif
                                >{{ $imp_opcions->name }}</option>
                            @endforeach
                        </select>
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

                        <select name="risk_false">
                            @foreach ($risks as $risk_opcions)
                            <option value="{{ $risk_opcions->id }}" @if ($risk_opcions->name == old('risk_false', $risk1->name))
                                selected="selected"
                                @endif
                                >{{ $risk_opcions->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="type_false" :value="__('answer.type')" />

                        <select name="type_false">
                            @foreach ($types as $type_opcions)
                            <option value="{{ $type_opcions->id }}" @if ($type_opcions->name == old('type_false', $type1->name))
                                selected="selected"
                                @endif
                                >{{ $type_opcions->name }}</option>
                            @endforeach
                        </select>

                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="inter_false" :value="__('answer.inter')" />

                        <select name="inter_false">
                            @foreach ($interventions as $inter_opcions)
                            <option value="{{ $inter_opcions->id }}" @if ($inter_opcions->name == old('inter_false', $intervention1->name))
                                selected="selected"
                                @endif
                                >{{ $inter_opcions->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="prob_false" :value="__('answer.prob')" />


                        <select name="prob_false">
                            @foreach ($probabilities as $prob_opcions)
                            <option value="{{ $prob_opcions->id }}" @if ($prob_opcions->name == old('prob_false', $probability1->name))
                                selected="selected"
                                @endif
                                >{{ $prob_opcions->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('text')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="imp_false" :value="__('answer.imp')" />
                        
                        <select name="imp_false">
                            @foreach ($impacts as $imp_opcions)
                            <option value="{{ $imp_opcions->id }}" @if ($imp_opcions->name == old('imp_false', $impact1->name))
                                selected="selected"
                                @endif
                                >{{ $imp_opcions->name }}</option>
                            @endforeach
                        </select>
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