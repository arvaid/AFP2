<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'question_title' => $this->faker->sentence,
            'question_text'=>$this->faker->paragraph,
            'user_id' => User::all()->random()->id,
            'topic_id' => Topic::all()->random()->id,
        ];
    }
}
