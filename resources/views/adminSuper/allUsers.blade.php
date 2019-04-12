@extends('adminSuper.layouts.default')

@section('title','Super Admin')

@section('adminSuper.content')

@if(Auth::user()->hasRole('Super_Admin'))

{{$users->links()}}

@foreach($users as $user)
<div class="card mb-2">
<div class="card-header">
  <h5 class="card-title text-info">  {{$user->getFullName()}} </h5>
</div>
<div class="card-body">
<table class="table table-borderless table-sm">
 <tbody>
    <tr>
      <th scope="row"> School: </th>
      <td>{{$user->school->name}}</td>
      <th>Course:</th>
      <td>{{$user->course->title}}</td>

    </tr>
    <tr>
      <th scope="row"> Roles : </th>
      <td>
          @foreach($user->roles as $role )
  <span class="text-info"> {{$role->name}} |</span>
          @endforeach
      </td>
      <th> </th>
      <td><button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal{{$user->id}}"> Change user role
</button></td>

    </tr>
  </tbody>
</table>



</div>

</div>




<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modal{{$user->id}}" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal{{$user->id}}">Update user roles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="{{route('superAdmin.addRole',$user)}}" method="post">
        @csrf
    <div class="modal-body">
        @foreach($roles as $role)


        <div class="form-check  ">

                <input class="form-check-input " type="checkbox" id="role{{$role->id}}" name="role{{$role->id}}" value= "{{$role->id}}"  {{$user->hasRole($role->name)?'checked':''}} >
                <label class="form-check-label" for="role{{$role->id}}">
                {{$role->name}}
                </label>

            </div>

       @endforeach
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
@endforeach
@endif

@endsection
