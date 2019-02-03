<?php

namespace App\Models;

use App\Task;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = ['user_id', 'name', 'description', 'icon', 'color'];

	 protected $appends = ['userCount', 'taskCount', 'progress'];

     protected $with = ['creator', 'users'];

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getUserCountAttribute(){
    	return ($this->users()->count() + 1);
    }
    public function getProgressAttribute(){
        if ($this->getTaskCountAttribute() != 0) {
            // dd($this->completedTasks());
            return (($this->completedTasks())/($this->getTaskCountAttribute()))*100;
        }else{
            return 0;
        }
        
    }

    public function getTaskCountAttribute(){
        return ($this->tasks()->count());   
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function tasks(){
    	return $this->hasMany(Task::class, 'project_id');
    }

    public function completedTasks(){
        return $this->tasks->where('state', 'completed')->count();
    }

    public function detachtTasks($user_id){
        // return $user_id;
        return $this->tasks->each(function($item, $key)  use($user_id){
            if ($item->users) {
                $item->users()->detach($user_id);
            }
        });
    }

}
