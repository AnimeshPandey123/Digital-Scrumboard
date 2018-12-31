<?php

namespace App\Http\Controllers\Task;

use App\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function tasks(Request $request){
    	$project = Project::findOrFail($request->project_id);
        // dd($project->task);
    	return $project->tasks;
    }

    public function create(Request $request){
        // return $request->all();
    	$task = Task::create([
    		'description' => $request->description,
    		'project_id' => $request->project_id,
    		'created_by' => $request->created_by,
    		'state' => 'todo',
    		'position' => $request->position,
    		'title' => $request->title,
    		'deadline' => $request->deadline
    	]);

    	return $task;
    }

    public function update(Request $request){

    }
}
