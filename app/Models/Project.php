<?php

namespace App\Models;

use App\Task;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = ['user_id', 'name', 'description', 'icon'];

	 protected $appends = ['userCount', 'taskCount'];

     protected $with = ['creator'];

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function getUserCountAttribute(){
    	return ($this->users()->count() );
    }

    public function getTaskCountAttribute(){
        return $this->tasks()->count();   
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function tasks(){
    	return $this->hasMany(Task::class, 'project_id');
    }

}
