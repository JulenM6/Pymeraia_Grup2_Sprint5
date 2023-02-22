<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        //pagina principal de informes mostra llistat informes
        $reports = Report::all();

        return view('report.index', compact('reports')) ;
    }
    //acció
    public function show($id){
        //pagina que mostra els detalls de informes
        $sql="SELECT answers.id, answers.name as answers, answers.recommendation as recommendation, questions.name as questions, type_measures.name as type_measures, risks.name as risks, probabilities.name as probabilities, interventions.name as interventions, impacts.name as impacts
        FROM reports
		INNER JOIN results
		ON  results.report_id = reports.id
        INNER JOIN answers
        ON results.answer_id = answers.id
        INNER JOIN impacts
        ON impacts.id = answers.impact_id
        INNER JOIN interventions
        ON interventions.id = answers.intervention_id
        INNER JOIN probabilities
        ON probabilities.id = answers.probability_id
        INNER JOIN questions
        ON questions.id = answers.question_id
        INNER JOIN risks
        ON risks.id = answers.risk_id
        INNER JOIN type_measures
       	ON type_measures.id = answers.type_measure_id
        WHERE reports.id = '$id';
        ";
        $report = DB::select($sql);

        return view  ('report.show',compact('report'));
    }
}
