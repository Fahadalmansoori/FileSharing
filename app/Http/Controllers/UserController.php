<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\File;

class UserController extends Controller
{

    // this function returns the user purchased files

    public function Purchased(User $user)
    {
        $files = $user->files()->Purchased()->get();
        $school = $user->school;
        return
            view('Users.files_purchased', compact('files','school'));
    }

    // this function returns the user owned files

    public function Owned(User $user)
    {
        $files = $user->files()->owned()->get();
        $school = $user->school;

        return view('Users.files_owned', compact('files','school'));
    }
}

