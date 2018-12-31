<?php

namespace App\Http\Controllers\Project;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
	public function index(){
		
		return view('admin.project');
	}

    public function create(){
    	return view();
    }

    public function get(){
        $user = auth()->user();
        $createdProjects = $user->createdProjects;
        $projects = $user->projects;    
        $allProjects = array_merge($createdProjects->toArray(), $projects->toArray());
        return response()->json($createdProjects, 200);
    }

    public function store(Request $request){
    	// dd($request->all());
    	Project::create(['name' => $request->name,
    					'description' => $request->description,
                        'icon' => $request->icon,
    					'user_id' => auth()->user()->id
    	]);
    	return response()->json('success', 200);

    }

    public function mainProject($project_id){

        $project = Project::findOrFail($project_id);
        return view('admin.project.mainProject')->with('project', $project);
    }

    public function getProject(Request $request){
        // return $request->all();
        $project = Project::findOrFail($request->project_id);
        // dd($project->creator);
        return response()->json( $project, 200);
    }

    public function update(Request $request){
        // return $request->all();
        $project = Project::findOrFail($request->project_id);
        $project->name =  $request->name;
        $project->icon =  $request->icon;
        $project->description = $request->description;
        $project->save();
        
        return response()->json( $project, 200);
    }
}
