<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuditController extends Controller
{
    public function show($id)
    {

        $survey = Report::find($id);

        $questionnaire= Questionnaire::find($survey->questionnaire_id);
        $questions = $questionnaire->questions()->with('answers')->get();

        return view('audit.show', compact('survey', 'questions'));
    }
}
