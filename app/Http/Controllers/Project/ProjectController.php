<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {

        return view('admin.project');
    }

    public function create()
    {
        return view();
    }

    public function get()
    {
        $user            = auth()->user();
        $createdProjects = $user->createdProjects;
        $projects        = $user->projects;
        $allProjects     = array_merge($createdProjects->toArray(), $projects->toArray());
        return response()->json($createdProjects, 200);
    }

    public function store(Request $request)
    {
        $color = ['dsb_blue_card', 'dsb_green_card', 'dsb_yellow_card', 'dsb_pink_card', 'dsb_grey_card'];
        $i = rand(0, count($color)-1);
      
        $project = Project::create(['name' => $request->name,
            'description'                      => $request->description,
            'icon'                             => $request->icon,
            'user_id'                          => auth()->user()->id,
            'color'                            =>$color[$i]
        ]);
        if ($request->email)
        {
            foreach ($request->emails as $key => $value)
            {
                $user = User::where('email', $value)->first();
                $project->users()->attach($user->id);
            }
        }

        // dd($project->users);
        return response()->json('success', 200);

    }

    public function mainProject($project_id)
    {

        $project = Project::findOrFail($project_id);

        return view('admin.project.mainProject')->with('project', $project);
    }

    public function getProject(Request $request)
    {
        // return $request->all();
        $project = Project::findOrFail($request->project_id);
        // dd($project->creator);
        return response()->json($project, 200);
    }

    public function update(Request $request)
    {
        // return response()->json($project, 500);        // return $request->all();
        $project              = Project::findOrFail($request->project_id);
        $users                = $project->users;
        $project->name        = $request->name;
        $project->icon        = $request->icon;
        $project->description = $request->description;
        $emails = $request->emails;
        if (!isset($request->emails)) {
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
                        $project->users()->detach($proUser->id);
                        $project->detachtTasks(2);
                    }
                    else
                    {
                        unset($emails[array_search($proUser->email, $emails)]);
                    }
                }
            }

            foreach ($emails as $key => $value)
            {
                $user = User::where('email', $value)->first();
                $project->users()->attach($user->id);
            }
            // dd($emails);

        }
        $project->save();

        return response()->json($project, 200);
    }

    public function getTask(Request $request)
    {
        // return $request->all();
        $project = Project::findOrFail($request->project_id);
        // dd($project->creator);
        $tasks = $project->tasks->where('state', $request->state);
        return $tasks;
        return response()->json($project, 200);
    }

}
