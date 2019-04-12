<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\School;
use App\Models\Module;
use App\Models\User;
use Laravel\Scout\Searchable;

class Course extends Model
{
    use Searchable;
    
    protected $fillable = [
        'id', 'school_id', 'title', 'about'
    ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    public function searchableAs()
    {
        return 'courses';
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
 