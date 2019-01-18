<?php

namespace App\Http\Controllers\Task;

use App\Task;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{

    public function index($id){
        return Task::find($id);
    }

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
        $task = Task::find($request->task_id);
        $task->description = $request->description;
        $task->deadline = $request->deadline;
        $task->position = $request->position;
        $task->title = $request->title;
        $task->state = $request->state;
        $task->save();
        return $task;
    }

    public function updatePosition(Request $request){
        // return $request->all();
        // dd($request->position);
        $task = Task::find($request->task_id);
        // dd($task);
        $task->position = $request->position; 
        $task->state = $request->state;
        $task->save();
        return $task;
    }
}
