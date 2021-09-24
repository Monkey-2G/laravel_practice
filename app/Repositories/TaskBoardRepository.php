<?php

namespace App\Repositories;

use App\Models\TaskBoard;
use App\Models\User;

class TaskBoardRepository
{
    /**
     * 해당 user의 게시글을 모두 가져온다.
     * @param 
     */
    public function getTaskAll(User $user)
    {
        return TaskBoard::where('user_id', $user->id)->get();
    }
}