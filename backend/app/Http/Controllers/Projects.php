<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class Projects extends Controller
{
    // Get all projects
    public function index()
    {
        return response()->json(Project::all(), 200);
    }

    // Create a new project
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Email' => 'required|email|max:70',
            'Name' => 'required|string|max:100',
            'Id_Contact' => 'required|integer|exists:Contacts,Id',
            'Description' => 'required|string|max:200',
            'Objective' => 'required|string|max:200',
            'ID_Type' => 'required|integer|exists:Types,ID_Type',
            'Photo' => 'required|string',
            'URL' => 'required|string|max:150',
            'Id_Social_Network' => 'required|integer|exists:Social_Network,Id',
            'Phone_Number' => 'nullable|string|max:15',
            'Address' => 'nullable|string|max:150',
            'Status' => 'required|boolean',
            'dTimeStamp' => 'required|date',
        ]);

        $project = Project::create($validated);

        return response()->json($project, 201);
    }

    // Get a specific project by ID
    public function show(Project $project)
    {
        return response()->json($project, 200);
    }

    // Update an existing project
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'Email' => 'required|email|max:70',
            'Name' => 'required|string|max:100',
            'Id_Contact' => 'required|integer|exists:Contacts,Id',
            'Description' => 'required|string|max:200',
            'Objective' => 'required|string|max:200',
            'ID_Type' => 'required|integer|exists:Types,ID_Type',
            'Photo' => 'required|string',
            'URL' => 'required|string|max:150',
            'Id_Social_Network' => 'required|integer|exists:Social_Network,Id',
            'Phone_Number' => 'nullable|string|max:15',
            'Address' => 'nullable|string|max:150',
            'Status' => 'required|boolean',
            'dTimeStamp' => 'required|date',
        ]);

        $project->update($validated);

        return response()->json($project, 200);
    }

    // Delete a project
    public function destroy(Project $project)
    {
        $project->delete();

        return response()->json(null, 204);
    }
}
