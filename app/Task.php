<?php

namespace App;

use App\User;
use Carbon\Carbon;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description', 'project_id', 'created_by', 'updated_by', 'state', 'position', 'deadline', 'title'];

    protected $casts = ['deadline' => 'date:Y-M-d'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function getDateAttribute()
    {
         return (new Carbon($this->deadline))->format('Y-m-d');
    }
}
