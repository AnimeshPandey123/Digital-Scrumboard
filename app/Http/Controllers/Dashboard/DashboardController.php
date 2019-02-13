<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\UserPreference;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // dd($user);
        $projects = $user->createdProjects()->latest()->take(5)->get();
        // dd($projects);
        $today = new Carbon();
        $tasks = $user->tasks->where('deadline', '<', $today);
        $tasks->sortByDesc('deadline');
        // dd($tasks);
        return view('admin.dashboard')->with('projects', $projects)->with('userPref', $user->userPreference)->with('tasks', $tasks);

    }

    public function getTasks()
    {
        $user  = auth()->user();
        $today = new Carbon();
        $tasks = $user->tasks->where('state', '!=', 'completed')->where('deadline', '<=', $today->addDays(5));
        // dd($tasks);
        return $tasks->sortByDesc('deadline');
    }

    public function getRecents()
    {
        $user = auth()->user();
        // $today = new Carbon();

        $completedTasks  = $user->tasks->where('updated_at', '>=', Carbon::now()->subDays(5))->where('completed_by', $user->id)->sortBy('updated_at')->all();
        $createdProjects = $user->createdProjects->where('created_at', '>=', Carbon::now()->subDays(1))->sortByDesc('created_at')->take(4)->all();
        // dd(collect($completedTasks));
        // reset($completedTasks);
        $arr = [];
        if ($completedTasks)
        {
            # code...

            $arr['task_completed']  = [];
            $arr['created_project'] = [];
            // dd($arr['task_completed']);

            $recentDate                    = collect($completedTasks)->last()->updated_at->format('Y-M-d');
            $arr['task_completed']['date'] = $recentDate;
            foreach ($completedTasks as $key => $value)
            {
                // dd($value->subject->project->id);
                $project = $value->project;

                $arr['task_completed'][$project->name][] = $value->id;
            }

            // dd($arr);
        }

        if ($createdProjects)
        {
            foreach ($createdProjects as $key => $value)
            {
                $created_at = Carbon::parse($value->created_at)->format('Y-M-d');
                // dd($value);
                // return $value;
                array_push($arr['created_project'], [
                    'name'       => $value->name,
                    'created_at' => $created_at,
                    'userCount'  => $value->userCount - 1,
                ]);
            }
        }
        return $arr;
    }
}
