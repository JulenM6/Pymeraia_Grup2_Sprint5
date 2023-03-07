<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Creo 40 preguntas con 2 respuestas cada una
        for ($i = 1; $i <= 40; $i++) {
            $question = Question::factory()->create();

            Answer::factory()->create([
                'question_id' => $question->id,
                'name' => 'Sí',
            ]);

            Answer::factory()->create([
                'question_id' => $question->id,
                'name' => 'No',
            ]);
        }
    }
}
