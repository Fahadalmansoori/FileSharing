@extends('Account.layouts.default')

@section('title', 'update details')

@section('Account.content')

<form action="{{route('account.update', Auth()->user())}}" method="post" class="m-2">
@csrf

<div class="form-row">
        <div class="form-group col-md-6">
        <label for="fname"> First name</label>
        <input type="text" class="form-control col" name ="fname" id="fname" value="{{old('fname')? old('fname') : $user->first_name}}">
        @if($errors->has('fname'))
        <p class="text-danger"> {{$errors->first('fname')}} </p>
        @endif


    </div>

        <div class="form-group col-md-6">
        <label for="lname"> Last name</label>
        <input type="text" class="form-control col" name ="lname" id="lname" value="{{old('lname')? old('lname') : $user->last_name}}">

        @if($errors->has('lname'))
        <p class="text-danger"> {{$errors->first('lname')}} </p>
        @endif
        </div>
</div>

<div class="form-row">
        <div class="form-group col-md-6">
        <label for="fname"> Email </label>
        <input type="text" class="form-control col" name ="email" id="email" value="{{old('email')? old('email') : $user->email}}">

        @if($errors->has('email'))
        <p class="text-danger"> {{$errors->first('email')}} </p>
        @endif
        </div>
        <div class="form-group col-md-6">
        <label for="lname"> Your course</label>
         <select name="course" id="course" class="form-control col">
             @foreach($user->school->courses as $course)
                <option value="{{$course->id}}"> {{$course->title}} {{ $course->id == $user->course->id? ' selected' : ''}}</option>

             @endforeach
         </select>
         @if($errors->has('course'))
        <p class="text-danger"> {{$errors->first('course')}} </p>
        @endif
        </div>
</div>
<div class="alert">
    <button type="submit" class="btn btn-info float-right"> Update details </button>
</div>
</form>

@endsection

