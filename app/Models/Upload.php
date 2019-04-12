<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\File;
use App\Models\Module;


class Upload extends Model
{
   // use SoftDeletes;

    protected $fillable = ['file_id', 'user_id', 'filename', 'size', 'approved'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function file()
    {
        return $this->belongsTo(File::class);
    }


    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
