<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\TaskBoardRepository;

class TaskBoardService 
{
    public function __construct(private TaskBoardRepository $taskBoardRepository)
    {
        
    }

    public function getTaskAll(User $user) 
    {
        return $this->taskBoardRepository->getTaskAll($user);
    }
}