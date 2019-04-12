<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\File;
use Auth;

class FilePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //This function to check if the user can edit/delete/update a file
    public function touch( File $file)
    {

        return Auth::user()->id == $file->user_id;
    }

    //This function to check if the user can approve a file
    public function approve(File $file, User $user)
    {

        return $user->role == 'tutor';
    }
}

