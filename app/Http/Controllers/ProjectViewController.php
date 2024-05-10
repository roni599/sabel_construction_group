<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Image;

class ProjectViewController extends Controller
{
    public function index()
    {
        $projects = Image::with('project')->get(); // Eager load images relationship
        return view('client.pages.post', compact('projects'));
    }


    // public function view_project($id)
    // {
    //     $project = Project::with('images')->find($id);
    //     // dd($project->images);
    //     return view('client.pages.single-property-1', ['project' => $project]);
    // }

    public function projects()
    {

        //$uniqueProjectIds = Image::distinct()->pluck('project_id');
        // dd($projects->images[0]->image_name);
        //$projects = Image::where('division_name', 'dhaka')->get();
        $projects_all=Image::all();
        $projects=Image::all();

        return view('client.pages.index', compact('projects','projects_all'));
    }

    public function completed_projects()
    {
        // Fetch unique project_id values from the images table
        // $uniqueProjectIds = Image::distinct()->pluck('project_id');
        
        // // Retrieve projects corresponding to the unique project_ids with eager loading
        // // $projects = Project::whereIn('project_id', $uniqueProjectIds)->with('images')->get();
        // $projects = Project::whereIn('project_id', $uniqueProjectIds)
        //     ->where('status', 'completed') // Add condition to filter by status
        //     ->with('images')
        //     ->get();
            
        $projects = Image::whereHas('project', function ($query) {
            $query->where('status', 'completed');
        })->get();
        

        return view('client.pages.completed-projects', compact('projects'));
    }

    public function ongoing_projects()
    {
        // Fetch unique project_id values from the images table
        $uniqueProjectIds = Image::distinct()->pluck('project_id');

        // Retrieve projects corresponding to the unique project_ids with eager loading
        // $projects = Project::whereIn('project_id', $uniqueProjectIds)->with('images')->get();
        // $projects = Project::whereIn('project_id', $uniqueProjectIds)
        //     ->where('status', 'ongoing') // Add condition to filter by status
        //     ->with('images')
        //     ->get();

        // dd($projects->images[0]->image_name);
        $projects = Image::whereHas('project', function ($query) {
            $query->where('status', 'ongoing');
        })->get();

        return view('client.pages.ongoing', compact('projects'));
    }
    public function project_map(Request $request)
    {
        $city = $request->city;
        $images = Image::where('division_name', $city)->with('project')->get();
        $imagesByProjectId = $images->groupBy('project_id');

        // Initialize an array to store projects with their associated images
        $projectsWithImages = [];
        foreach ($imagesByProjectId as $projectId => $images) {
            $project = Project::find($projectId);

            if ($project) {
                $projectsWithImages[] = [
                    'project' => $project,
                    'images' => $images
                ];
            }
        }
        return response()->json(['projects_with_images' => $projectsWithImages]);
    }
    public function project_map_item(Request $request)
    {
        $projectId = $request->input('project_id');
        $project = Image::where('project_id', $projectId)->with('project')->get();
        $imagesByProjectId = $project->groupBy('project_id');
       
        $projectsWithImages = [];
        foreach ($imagesByProjectId as $projectId => $images) {
            $project = Project::find($projectId);

            if ($project) {
                $projectsWithImages[] = [
                    'project' => $project,
                    'images' => $images
                ];
            }
        }
        
        return response()->json(['project' => $projectsWithImages]);
    }
    public function detailsView($dist)
    {
        //dd($dist);
       
        $projects = Image::where('project_id', $dist)->first();
        
        return view('client.pages.single-property-1',compact('projects'));
    }
}
