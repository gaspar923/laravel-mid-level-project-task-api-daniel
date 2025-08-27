<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
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

    public function store(StoreProjectRequest $request)
    {
        $validated = $request->validated();
        // if ($validated->fails()) {
        //     // return redirect('/post/create')
        //     //     ->withErrors($validator)
        //     //     ->withInput();
        // }
        $validated['description'] = $request->description ?? '';
        $project = Project::create($validated);

        return $project;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $project = Project::find($id);
        return $project;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $request) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, $id)
    {
        $validated = $request->validated();
        $validated['description'] = $request->description ?? '';
        $project = Project::find($id);
        $project->update($validated);

        return $project;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->update(['status' => 'inactive']);
        return $project;
    }
}
