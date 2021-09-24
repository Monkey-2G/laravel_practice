<?php

namespace App\Http\Controllers;

use App\Services\TaskBoardService;

class TaskController extends Controller
{
    public function __construct(private TaskBoardService $taskBoardService)
    {
        
    }

    public function index () 
    {
        $getUserTaskAllList = $this->taskBoardService->getTaskAll(auth()->user());
        return view('task.index', compact('getUserTaskAllList'));
    }
}
