<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use App\models\User;
use App\Models\Upload;
use App\Models\Module;
use App\Models\Download;
use Auth;

class File extends Model
{
    use SoftDeletes;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',  'module_id', 'title', 'keywords', 'about', 'price', 'live', 'approved', 'finished', 'owner', 'mark','approved_by'
    ];

    public function downloads(){
        return $this->hasmany(Download::class);
    }

    public function numberOfDownloads(){
        return $this->downloads()->count();
    }

    public function files(){
        return $this->hasOneThrough(Module::class, School::class );
     }

    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }

    public function upload()
    {
        return $this->hasOne(Upload::class);
    }

    public function scopeDeclinedBy($query, User $user)
    {

        return $query->where('approved_by', $user->id)->where('approved', false);
    }


    public function scopeApprovedBy($query, User $user)
    {

        return $query->where('approved_by', $user->id)->where('approved', true);
    }
//returns all approved  files
    public function scopeApproved($query)
    {

        return $query->where('approved', true);
    }

//returns all pending  files
    public function scopePending($query)
    {

        return $query->where('approved', false)->where('finished', false);
    }

    //returns all declined files  by a user
    public function scopeassignments($query, User $user)
    {

        return $query->where('finished', true)->where('approved_by', $user->id);
    }
//returns all declined files
    public function  scopeDeclined($query)
    {

        return $query->where('finished', true);
    }

    public function approval(){
       return User::find($this->approved_by);
    }


    public function scopeOwned($query)
    {

        return $query->where('owner', true);
    }

    public function scopePurchased($query)
    {
     return $query->where('owner', false);
    }

public function status () {
    if(!$this->approved && !$this->finished ){
return 'Pending';
    }elseif($this->finished){
return "Declined";
    }elseif($this->approved){
        return "Approved";
    }
}



    public function searchableAs()
    {
        return 'files';
    }


    public function toSearchableArray()
    {
        $array = $this->toArray();
        /*
            to solove the numeris propblem on Algolia

        */
        //  $array['live'] = $this->live === true;

        return $array;
    }
}
