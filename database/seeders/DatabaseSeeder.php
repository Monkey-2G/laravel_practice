<?php

namespace Database\Seeders;

use App\Models\taskBoard;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(taskBoardSeeder::class); // seeder class의 run() 호출
        taskBoard::factory()->count(20)->create(); // model factory에서 정의한 definition() 호출. 여기서 사용시에는 model인 taskBoard를 가져와야함.
    }
}
