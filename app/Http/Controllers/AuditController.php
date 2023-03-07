<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuditController extends Controller
{
    public function show($id)
    {

        $survey = Report::find($id);
        $questions = DB::table('questions')
        ->select('questions.description')
        ->join('question_questionnaire','question_questionnaire.questionnaire_id','=','questions.id')
        ->where('question_questionnaire.questionnaire_id','=',$id)
        ->paginate(1);

        $report= Report::with('answers.typemeasure', 'answers.risk', 'answers.probability', 'answers.intervention', 'answers.impact', 'answers.question')->find($id);

        return view('audit.show', compact('survey', 'questions'));
    }
}