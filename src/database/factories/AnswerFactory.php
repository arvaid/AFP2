<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnswerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Answer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'answer_text'=>$this->faker->paragraph,
            'user_id' => User::all()->random()->id,
            'score' => $this->faker->numberBetween(0, 100),
            'question_id'=> Question::all()->random()->id,
        ];
    }
}
