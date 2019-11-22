<?php

namespace App;

use App\Task;
use App\Models\Project;
use App\UserPreference;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'pivot'
    ];

    protected $appends = ['image'];

    public function getEmail(){
        return $this->email;
    }

    public function createdProjects(){
        return $this->hasMany(Project::class)->latest();
    }

    public function projects(){
        return $this->belongsToMany(Project::class)->latest();
    }

    public function tasks(){
        return $this->belongsToMany(Task::class);
    }

    public function userPreference(){
        return $this->hasOne(UserPreference::class);
    }
    public function getImageAttribute(){
        if ($this->userPreference->uploaded) {
            return $this->userPreference['picture_url'];
        }else{
            return $this->userPreference['picture_url'];
        }
        
    }

}
