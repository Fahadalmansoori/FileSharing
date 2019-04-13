<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AccountController extends Controller
{
   public function index(){
       return view('Account.index');
   }

   public function update(User $user ){

    return view ('Account.edit', compact('user'));
   }

   public function store(Request $request , User $user){
$request->validate([
    'fname' => ['required', 'string', 'max:255'],
    'lname' => ['required', 'string', 'max:255'],
    'email' => ['required', 'email','unique:users,email,'.$user->id],
    'course' => ['required'],
]);

$user->update([
    'first_name' => $request->input('fname'),
    'last_name' => $request->input('lname'),
    'course_id' => $request->input('course'),
    'email' => $request->input('email'),

]);
return redirect()->back()->with('success', "You have updated your details.");

   }

   public function changePassword(User $user ){

    return view ('Account.changePassword', compact('user'));
   }

}
