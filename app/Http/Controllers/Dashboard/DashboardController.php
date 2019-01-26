<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use App\UserPreference;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
 		$user = auth()->user();
		$projects = $user->createdProjects;
		$today = new Carbon();
    	$tasks = $user->tasks->where('deadline', '<', $today);
    	$tasks->sortByDesc('deadline');
    	// dd($tasks);
		return view('admin.dashboard')->with('projects', $projects)->with('userPref', $user->userPreference)->with('tasks', $tasks);
	
    }

    public function getTasks(){
    	$user = auth()->user();
    	$today = new Carbon();
    	$tasks = $user->tasks->where('state','!=', 'completed')->where('deadline', '<=', $today);
    	return $tasks->sortByDesc('deadline');
    }
}
