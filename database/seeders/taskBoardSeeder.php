<?php

namespace Database\Seeders;

use App\Models\taskBoard;
use Illuminate\Database\Seeder;

class taskBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        taskBoard::insert([
            'user_id' => 7,
            'subject' => 'seeder test subject',
            'content' => 'seeder test content'
        ]);
    }
}
