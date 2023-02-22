<?php

namespace Database\Factories;

use App\Models\QuestionnaireUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $questionnaire_user_id = QuestionnaireUser::all()->pluck('id')->toArray();


        return [
            'name' => $this->faker->unique()->name(),
            'questionnaire_user_id' => $this->faker->randomElement($questionnaire_user_id),
            'date' => $this->faker->date(),
        ];
    }
}
