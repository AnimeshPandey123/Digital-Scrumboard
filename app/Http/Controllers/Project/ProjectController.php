<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
	public function index(){
		$user = auth()->user();
		$createdProjects = $user->createdProjects;
		$projects = $user->projects;	
		$allProjects = array_merge($createdProjects->toArray(), $projects->toArray());
		$arr = array_chunk($allProjects, 3);
		return view('admin.project')->with('projects', $allProjects)
									->with('chunks', $arr);
	}

    public function create(){
    	return view();
    }

    public function store(Request $request){
    	// dd($request->all());
    	Project::create(['name' => $request->name,
    					'description' => $request->description,
    					'user_id' => 1	
    	]);
    	return view();

    }
}
