<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Questionnaire;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuditController extends Controller
{

    public function index()
    {
        /* Página con los cuestionarios por responder, luego habría que filtrar
        por usuario/empresa cuando los grupos estén unificados */
        $audits = Report::where('status', 'pending')
        ->orderBy('id')
        ->simplePaginate(10);

        return view('audit.index', compact('audits'));
    }

    public function show($id)
    {

        $survey = Report::find($id);

        $questionnaire= Questionnaire::find($survey->questionnaire_id);
        $questions = $questionnaire->questions()->with('answers')->get();
        $results = $survey->answers()->get();

        $count = $results->count();

        return view('audit.show', compact('survey', 'questions', 'results', 'count'));
    }
}
