<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks, 200);
    }

    public function edit(Request $request)
    {
        $task = Task::find($request->id);
        return response()->json($task, 200);
    }

    public function update(Request $request)
    {
        $task = Task::find($request->id);
        $task->task = $request->task;
        $task->save();
        return response()->json($task, 200);
    }

    public function delete(Request $request)
    {
        $task = Task::find($request->id);
        $task->delete();
        $tasks = Task::all();
        return response()->json($tasks, 200);
    }

    public function create(Request $request)
    {
        $task = new Task;
        $task->task = $request->task;
        $task->save();
        $tasks = Task::all();
        return response()->json($tasks, 200);
    }
}
