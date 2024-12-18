<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        // Fetch tasks for the authenticated user
        $tasks = Task::where('user_id', Auth::id())->get();
        
        // Return the view with the tasks variable
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);
        Task::create(['title' => $request->title, 'user_id' => Auth::id()]);
        return redirect()->back()->with('success', 'Task created successfully!');
    }

    public function update(Request $request, Task $task)
    {
        $request->validate(['title' => 'required']);
        $task->update(['title' => $request->title]);
        return redirect()->back()->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back()->with('success', 'Task deleted successfully!');
    }
}