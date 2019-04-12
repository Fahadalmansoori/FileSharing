<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\School;
use App\Models\Role;
use Auth;


class SuperadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
       return view('adminSuper.index');
    }

public function getAllUsers(){

    $superAdmin = Auth::user();
    $roles = Role::all();
    $users= User::paginate(4);
    return view ('adminSuper.allUsers', compact('users','superAdmin','roles'));
}

    public function addRole(Request $request, User $user)
    {
   $roles = [];


   if($request->filled('role2')){
       $roles[] = Role::find($request->input('role2'));
   }
   if($request->filled('role1')){
    $roles[] = Role::find($request->input('role1'));
}
if($request->filled('role3')){
    $roles[] = Role::find($request->input('role3'));
}

$user->roles()->detach();
$user->roles()->saveMany($roles);

     return redirect()->back()->with('success', "user's role updated.");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
