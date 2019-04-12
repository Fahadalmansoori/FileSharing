<?php

namespace App\Models;

use App\Models\User;
use App\Models\File;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{

    protected $fillable = ['user_id','file_id'];

    public function requester(){
        return $this->hasOne(User::class);
    }

    public function file(){
        return $this->belongsTo(File::class);
    }

    public function owner(File $file){
        $owner = User::find($file->user_id);
        return $owner;
    }

}
