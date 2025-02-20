@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Create New Task</h1>
    <form action="" method="POST">
        @csrf
       
        {{-- Task Name --}}
        <div class="mb-4">
            <label for="task_name" class="block font-semibold">Task Name</label>
            <input type="text" name="task_name" id="task_name" class="w-full p-2 border rounded" placeholder="e.g., Take out trash" required>
        </div>

        {{-- Task Location --}}
        <div class="mb-4">
            <label for="task_location" class="block font-semibold">Location</label>
            <input type="text" name="task_location" id="task_location" class="w-full p-2 border rounded" placeholder="Kitchen, Garage, etc.">
        </div>

        {{-- Time Estimate --}}
        <div class="mb-4">
            <label for="time_complexity" class="block font-semibold">Time Estimate</label>
            <select name="time_complexity" id="time_complexity" class="w-full p-2 border rounded">
                <option value="10">10 min</option>
                <option value="30">30 min</option>
                <option value="60">1 hour</option>
                <option value="120">2 hours</option>
                <option value="300">5 hours</option>
            </select>
        </div>

        {{-- Materials Required --}}
        <div class="mb-4">
            <label for="materials_required" class="block font-semibold">Materials Required (Optional)</label>
            <input type="text" name="materials_required" id="materials_required" class="w-full p-2 border rounded" placeholder="e.g., Trash Bags, Broom">
        </div>

        {{-- Deadline --}}
        <div class="mb-4">
            <label for="deadline" class="block font-semibold">Deadline (Optional)</label>
            <input type="datetime-local" name="deadline" id="deadline" class="w-full p-2 border rounded">
        </div>

        {{-- Priority --}}
        <div class="mb-4">
            <label for="priority" class="block font-semibold">Priority</label>
            <select name="priority" id="priority" class="w-full p-2 border rounded">
                <option value="1">Low (1)</option>
                <option value="2">Medium (2)</option>
                <option value="3">High (3)</option>
            </select>
        </div>

        {{-- Category --}}
        <div class="mb-4">
            <label for="category" class="block font-semibold">Category (Optional)</label>
            <input type="text" name="category" id="category" class="w-full p-2 border rounded" placeholder="e.g., chores, work, health">
        </div>

        {{-- Submit and Cancel Buttons --}}
        <div class="flex gap-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create Task</button>
            <a href="{{ url('/') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</a>
        </div>
    </form>
</div>
@endsection