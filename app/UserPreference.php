<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $fillable = ['picture_url', 'user_id', 'theme', 'picture_uploaded', 'notify'];
}
