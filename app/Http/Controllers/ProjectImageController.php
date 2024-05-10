<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;

class ProjectImageController extends Controller
{
    public function showForm()
    {
        return view('client.pages.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate form data
        $request->validate([
            'project_name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'dist' => 'string',
            'employee' => 'required|string',
            'type' => 'required|string',
            'doc' => 'required|date',
            'value' => 'required|numeric',
            'status' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10048' // Validate each uploaded image
        ]);

        

        // Create project
        $project = Project::create([
            'project_name' => $request->project_name,
            'description' => $request->description,
            'location' => $request->location,
            'dist' => $request->dist,
            'employee' => $request->employee,
            'type' => $request->type,
            'doc' => $request->doc,
            'value' => $request->value,
            'status' => $request->status
        ]);
        

        // Upload images
        $images = array();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = rand(1, 1000) . '_' . $request->image_name . '.' . $image->getClientOriginalExtension();
                $image->move('images/uploads', $imageName);
                $images[]= $imageName;
            }
        }
        Image::create([
            'image_name' => implode('|', $images),
            'division_name' => $project->dist,
            'project_id' => $project->project_id
        ]);

        return redirect()->route('project.create')->with('success', 'Project created successfully.');
    }
}
