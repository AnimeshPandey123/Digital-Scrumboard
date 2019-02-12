<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Project;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd($request->project_id);
        $project = Project::findorFail($request->project_id);
         $user = $project->users->where('id', auth()->user()->id)->first();
        // dd($project);
        if (auth()->user() != $project->creator) {
            if(!$user){
                return redirect()->route('dashboard');
            }
        }

        return $next($request);
    }
}
