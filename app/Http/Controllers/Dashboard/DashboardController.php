<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
 		$user = auth()->user();
		$projects = $user->createdProjects;
		// dd($projects);
		return view('admin.dashboard')->with('projects', $projects);
	
    }
}
