<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\User;
use App\Models\File;

class School extends Model
{
    protected $fillable = [
        'id', 'school_id', 'name', 'about'
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function files(){
       return $this->hasManyThrough(File::class, User::class );
    }

}
