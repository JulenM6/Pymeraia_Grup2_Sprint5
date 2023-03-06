<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnswerControler extends Controller
{
    public function index(){
        //pagina principal de respostes
        $answers = Answer::all();
        return view('answer.index', compact('answers')) ;
    }

    public function edit(Answer $answer){
        //editar una resposta
        return view('answer.edit', compact('answer'));
    }

    public function update(Request $request, $id)
    {
        $answer = Answer::find($id);
        $answer->name = $request->name;
        $answer->recommendation = $request->recommendation;
        $answer->update();

        return redirect()->route('answer.index', compact('answer'));
    }

     public function create(Request $request){

        return view('answer.create');
     }

    //public function insert(Request $request)
    //{
       // $answer = new Answer;
       // $answer->name = $request->name;
       // $answer->recommendation = $request->recommendation;
       // $answer->save();

      //  return redirect()->route('answer.index', compact('answer'));
    //}

}
