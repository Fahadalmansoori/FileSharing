<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\models\Role;
use App\models\File;
use App\models\School;
use App\models\Course;
use App\Models\Upload;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password', 'first_name', 'last_name', 'student_number', 'course_id', 'school_id',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,'roles_users');
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }

    public function downloads()
    {
        return $this->hasMany(Download::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }



    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function hasRole($role){
        return $this->roles->contains('name', $role);

    }

    public function getFullName(){
        return $this->first_name .' '.$this->last_name;
    }

    public function owner(File $file)
    {
        return $file->user_id == Auth::user()->id;
    }

}
