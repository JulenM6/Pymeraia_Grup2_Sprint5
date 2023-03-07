<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        //pagina principal de informes mostra llistat informes
        $reports = Report::all();

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

    public function pdf()
    {
        $report = Report::all();
        $pdf = PDF::loadView('report.pdf', compact('report'));
        return $pdf->download('Report{{id}}.pdf');
    }
}
