<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all tasks
        $tasks = Task::all();
        // Return a view (e.g., resources/views/tasks/index.blade.php)
        // with the tasks data
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return a view to create a new task
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
        'task_name' => 'required|string|max:255',
        'task_location' => 'nullable|string|max:255',
        'time_complexity' => 'required|integer|min:1|max:5',
        'materials_required' => 'nullable|string',
        'deadline' => 'nullable|date',
        'priority' => 'nullable|integer|min:1|max:3',
        'category' => 'nullable|string|max:255',
        ]);

        Task::create($validated);

        // Redirect or return
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
}

    /**
     * Display the specified task.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
