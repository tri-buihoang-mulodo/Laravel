<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    // lesson 08: Controller
    public function index()
    {
    	$tasks = Task::all();
    	return view('tasks.index',compact('tasks'));
    }

    // public function show($id)
    // {
    // 	$task = Task::find($id);
    // 	return view('tasks.show',compact('task'));
    // }

    // lesson 09: Route Model Binding
    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }
}
