<?php

namespace App\Http\Controllers;

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
            ->with('questionnaire')
            ->simplePaginate(10);

        return view('audit.index', compact('audits'));
    }

    public function show($id)
    {

        $survey = Report::find($id);

        $questionnaire = Questionnaire::find($survey->questionnaire_id);
        $questions = $questionnaire->questions()->with('answers')->get();

        return view('audit.show', compact('survey', 'questions'));
    }

    public function update(Request $request, $id)
    {
        $survey = Report::find($id);
        $answers = $request->input('answerIds');
        /* sync elimina antiguos valores y les mete los del array
           pasado por axios a la pivot table 'answer_report */
        $survey->answers()->sync($answers);
        // cambiando el estado a done y guardando
        $survey->status = 'done';
        $survey->save();
    }
}
