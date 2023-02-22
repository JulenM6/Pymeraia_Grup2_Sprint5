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
    public static $counter = 0;

    public function definition()
    {

        $questionnaire_user_id = QuestionnaireUser::all()->pluck('id')->toArray();


        return [
            'name' => str_pad(self::$counter++, 4, '0', STR_PAD_LEFT),
            'questionnaire_user_id' => $this->faker->randomElement($questionnaire_user_id),
            'date' => $this->faker->date(),
        ];
    }
    public function initialize()
    {
        self::$counter = 0;
    }
}
