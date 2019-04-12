<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\models\User;

class Role extends Model
{
    protected $fillable = [
        'id', 'name', 'about'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'roles_users');
    }
}
