<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Task;
use App\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index($id)
    {
        return Task::find($id);
    }

    public function tasks(Request $request)
    {
        $project = Project::findOrFail($request->project_id);
        // dd($project->task);
        return $project->tasks;
    }

    public function create(Request $request)
    {
        $task = Task::create([
            'description' => $request->description,
            'project_id'  => $request->project_id,
            'created_by'  => $request->created_by,
            'state'       => 'todo',
            'position'    => $request->position,
            'title'       => $request->title,
            'deadline'    => $request->deadline,
            'progress'    => 0,
        ]);
        $emails = $request->emails;
        // dd($emails);
        if (!isset($request->emails))
        {
            $emails = [];
        }
        if (isset($emails))
        {
            foreach ($emails as $key => $value)
            {
                $user = User::where('email', $value)->first();
                $task->users()->attach($user->id);
            }

        }

        return $task;
    }

    public function update(Request $request)
    {
        // return $requ;

        $task              = Task::find($request->task_id);
        $task->description = $request->description;
        $task->deadline    = $request->deadline;
        $task->title       = $request->title;
        $task->state       = $request->state;
        $task->progress    = $request->progress;
        $users             = $task->users;
        // dd($request->all());
        $emails = $request->emails;
        // dd($emails);
        if (!isset($request->emails))
        {
            $emails = [];
        }
        if (isset($emails))
        {

            if ($users)
            {
                foreach ($users as $key => $proUser)
                {
                    if (!in_array($proUser->email, $emails))
                    {
                        // dd($proUser);
                        $task->users()->detach($proUser->id);
                    }
                    else
                    {
                        unset($emails[array_search($proUser->email, $emails)]);
                    }
                }}

            foreach ($emails as $key => $value)
            {
                $user = User::where('email', $value)->first();
                $task->users()->attach($user->id);
            }
            // dd($emails);

        }
        // dd($request->all());
        $task->save();
        return $task;
    }

    public function updatePosition(Request $request)
    {
        // return $request->all();
        // dd($request->position);
        $task = Task::find($request->task_id);
        // dd($task);
        $task->position = $request->position;
        $task->state    = $request->state;
        if ($request->state == 'completed') {
            $task->completed_by = auth()->user()->id;
            activity()
                   ->performedOn($task)
                   ->causedBy(auth()->user())
                   ->withProperties(['type' => 'task_completed'])
                   ->log('This task is completed');
        }else{
            $task->completed_by = null;
        }
        $task->save();
        return $task;
    }

    public function userGet(Request $request)
    {
        $task = Task::find($request->task_id);
        return $task->users;
    }

    public function delete(Request $request){
        $task = Task::find($request->task_id);
        $task->users()->detach();
        $task->delete();
        return response()->json(['Task deleted']);
    }
}
