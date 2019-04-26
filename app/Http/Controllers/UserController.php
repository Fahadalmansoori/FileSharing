<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\File;

class UserController extends Controller
{

    // this function returns the user approved files

    public function approved(User $user)
    {
        $files = $user->files()->approved()->get();
        $school = $user->school;
        return
            view('Users.files_approved', compact('files','school'));
    }

    // this function returns the user declined files

    public function declined(User $user)
    {
        $files = $user->files()->declined()->get();
        $school = $user->school;
        return
            view('Users.files_declined', compact('files','school'));
    }

    public function pending(User $user)
    {
        $files = $user->files()->pending()->get();
        $school = $user->school;
        return
            view('Users.files_pending', compact('files','school'));
    }

    // this function returns the user owned files

    public function Owned(User $user)
    {
        $files = $user->files()->owned()->get();
        $school = $user->school;

        return view('Users.files_owned', compact('files','school'));
    }
}

