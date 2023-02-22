<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Impact;
use App\Models\Intervention;
use App\Models\Probability;
use App\Models\Risk;
use App\Models\TypeMeasure;
use Illuminate\Http\Request;
use Mockery\Matcher\Type;

class QuestionController extends Controller
{
    public function index(){
        //pagina principal de informes mostra llistat informes
        $questions = Question::where('hidden', false)
        ->orWhereNull('hidden')
        ->simplePaginate(10);

        return view('question.index', compact('questions'));
    }

    public function hidden(){
        //pagina principal de informes mostra llistat informes
        
        $questions = Question::whereNotNull('hidden')->simplePaginate(10);

        return view('question.hidden', compact('questions'));
    }
    //acció

    public function create(){
        $risks = Risk::all();
        $interventions = Intervention::all();
        $type_measures = TypeMeasure::all();
        $probabilities = Probability::all();
        $impacts = Impact::all();
        


        return view('question.create',compact('risks','interventions','type_measures','probabilities','impacts'));
    }
  

    public function store(Request $request){
        //crear preguntes
        
        $question = new Question();
 
        $question->name = $request->name;

        $question->description = $request->description;
 
        $question->save();

        $lastInsertedRecord = Question::orderBy('id', 'desc')->first();
        $lastId = $lastInsertedRecord->id;

       
        $answer = new Answer();
       
        $answer->name = 'Si';
        
       
        $answer->recommendation = $request->recommendation_true;

        $answer->risk_id = $request->risk_true;

        $answer->intervention_id = $request->intervention_true;

        $answer->type_measure_id = $request->measure_true;

        $answer->probability_id = $request->probability_true;

        $answer->impact_id = $request->impact_true;

        $answer->question_id = $lastId;

        $answer->save();


        $answer2 = new Answer();
 
        $answer2->name = 'No';

        $answer2->recommendation = $request->recommendation_false;

        $answer2->risk_id = $request->risk_false;

        $answer2->intervention_id = $request->intervention_false;

        $answer2->type_measure_id = $request->measure_false;

        $answer2->probability_id = $request->probability_false;

        $answer2->impact_id = $request->impact_false;

        $answer2->question_id = $lastId;

        $answer2->save();

        return response()->json(['id' => $question->id]);
        
    }

    public function edit(Question $question){

        //pagina que mostra els detalls de informes
        return view('question.edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->name = $request->name;
        $question->description = $request->description;
        $question->update();

        return redirect()->route('question.index');
    }

    public function unActivate($id){

        $question = Question::find($id);
        $question->hidden = now();
        $question->save();

        return redirect()->route('question.index');
    }

    public function activate($id){

        $question = Question::find($id);
        $question->hidden = null;
        $question->save();

        return redirect()->route('question.hidden');
    }
}
