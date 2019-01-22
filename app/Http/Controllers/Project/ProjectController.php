<?php

namespace App\Http\Controllers\Project;

use App\User;
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
    	
    	$project = Project::create(['name' => $request->name,
    					'description' => $request->description,
                        'icon' => $request->icon,
    					'user_id' => auth()->user()->id
    	]);

        foreach ($request->emails as $key => $value) {
            $user = User::where('email',$value)->first();
            $project->users()->attach($user->id);
        }
        // dd($project->users);
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

     public function getTask(Request $request){
        // return $request->all();
        $project = Project::findOrFail($request->project_id);
        // dd($project->creator);
        $tasks = $project->tasks->where('state', $request->state);
        return $tasks;
        return response()->json( $project, 200);
    }

}
