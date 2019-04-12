<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\File;
use App\Models\Course;
use Laravel\Scout\Searchable;
use App\Models\Upload;


class Module extends Model
{
    use Searchable;

    protected $fillable = ['id', 'file_id', 'course_id', 'title', 'total_mark'];

    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    //get the year 1 modules form the scope
    public function scopeYear1($query)
    {

        return $query->where('year', 1);
    }

    //get the year 2 modules form the scope
    public function scopeYear2($query)
    {

        return $query->where('year', 2);
    }
    //get the year 3 modules form the scope
    public function scopeYear3($query)
    {

        return $query->where('year', 3);
    }
    //get the year 4 modules form the scope
    public function scopeYear4($query)
    {

        return $query->where('year', 4);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        $array['course'] = $this->course;
        $array['school'] = $this->course->school;
        //$array['files'] = $this->files;
        return $array;
    }

    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }
}
