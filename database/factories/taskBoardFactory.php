<?php

namespace Database\Factories;

use App\Models\taskBoard;
use Illuminate\Database\Eloquent\Factories\Factory;

class taskBoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = taskBoard::class;

    /**
     * Define the model's default state.
     * task_board model에 대한 테스트 데이터 정의.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 5),
            'subject' => $this->faker->title,
            'content' => $this->faker->paragraph,
            'created_at' => now()
        ];
    }
}
