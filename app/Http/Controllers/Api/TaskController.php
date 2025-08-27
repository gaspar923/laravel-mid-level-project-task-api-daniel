<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $validated = $request->validated();
        $validated['description'] = $request->description ?? '';
        $task = Task::create($validated);

        return $task;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Task::find($id);
        return $task;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['description'] = $request->description ?? '';
        $task = Task::find($id);
        $task->update($validated);

        return $task;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
    }
}
