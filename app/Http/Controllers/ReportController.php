<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Models\Report;
use App\Models\User;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        //pagina principal de informes mostra llistat informes (solo sin completar)
        $reports = Report::where('status', 'done')->orderBy('date', 'desc')->paginate(10);

        return view('report.index', compact('reports'));
    }
    //acció
    public function show($id)
    {
        //pagina que mostra els detalls de informes
        $report = DB::table('reports')
            ->select('answers.id', 'answers.name as answers', 'answers.recommendation as recommendation', 'questions.name as questions', 'type_measures.name as type_measures', 'risks.name as risks', 'probabilities.name as probabilities', 'interventions.name as interventions', 'impacts.name as impacts')
            ->join('answer_report', 'answer_report.report_id', '=', 'reports.id')
            ->join('answers', 'answer_report.answer_id', '=', 'answers.id')
            ->join('impacts', 'impacts.id', '=', 'answers.impact_id')
            ->join('interventions', 'interventions.id', '=', 'answers.intervention_id')
            ->join('probabilities', 'probabilities.id', '=', 'answers.probability_id')
            ->join('questions', 'questions.id', '=', 'answers.question_id')
            ->join('risks', 'risks.id', '=', 'answers.risk_id')
            ->join('type_measures', 'type_measures.id', '=', 'answers.type_measure_id')
            ->where('reports.id', '=', $id)
            ->get();

        return view('report.show', compact('report'));
    }

    public function pdf($id)
    {

        $report = DB::table('reports')
            ->select('answers.id', 'answers.name as answers', 'answers.recommendation as recommendation', 'questions.name as questions', 'type_measures.name as type_measures', 'risks.name as risks', 'probabilities.name as probabilities', 'interventions.name as interventions', 'impacts.name as impacts')
            ->join('answer_report', 'answer_report.report_id', '=', 'reports.id')
            ->join('answers', 'answer_report.answer_id', '=', 'answers.id')
            ->join('impacts', 'impacts.id', '=', 'answers.impact_id')
            ->join('interventions', 'interventions.id', '=', 'answers.intervention_id')
            ->join('probabilities', 'probabilities.id', '=', 'answers.probability_id')
            ->join('questions', 'questions.id', '=', 'answers.question_id')
            ->join('risks', 'risks.id', '=', 'answers.risk_id')
            ->join('type_measures', 'type_measures.id', '=', 'answers.type_measure_id')
            ->where('reports.id', '=', $id)
            ->get();


        $pdf = PDF::loadView('report.pdf', compact('report'))->setPaper('legal', 'landscape');
        return $pdf->stream();
    }

    public function store(Request $request)
    {
        // crear un report (desde la vista auditorías)
        $report = new Report();
        $report->name = $request->input('reportName');
        $report->questionnaire_id = $request->input('selectedQuestionnaire');
        $report->user_id = $request->input('selectedUser');
        $report->date = date('Y-m-d');
        $report->status = "pending";

        $report->save();

        return response()->json([
            'redirect' => route('audit.index')
        ]);
    }
}
