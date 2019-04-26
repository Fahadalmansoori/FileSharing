<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;

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

public function show(User $user){
$school = $user->school;
$course = $user->course;

    return view('Account.details', compact('user', 'school','course'));
}

//get the change password form

   public function changePassword(User $user ){

    return view ('Account.changePassword', compact('user'));
   }

//submit the cahnge password form

   public function submitChangePassword(Request $request, User $user){
   $request->validate([
    'password' => ['required', function ($attribute, $value, $fail) {
        if (!Hash::check($value,auth()->user()->password)) {
                $fail(' Password provided is not matching the password on the system');
                }
            },],
         'new_password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
        // update the password
        $user->update([
        'password' => Hash::make($request->input('new_password')),
        ]);
        return redirect()->back()->with('success', "Password updated.");
        }



}
