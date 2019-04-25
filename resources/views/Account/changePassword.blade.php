@extends('Account.layouts.default')

@section('title', 'update details')

@section('Account.content')

<form action="{{route('account.changePassword', Auth()->user())}}" method="post" class="m-2">
@csrf

<div class="form-row">
        <div class="form-group col-md-6">
        <label for="password"> Old Password</label>
        <input type="password" class="form-control col" name ="password" id="password">
        @if($errors->has('password'))
        <p class="text-danger"> {{$errors->first('password')}} </p>
        @endif


</div>
</div>

<div class="form-row">


        <div class="form-group col-md-6 ">
        <label for="new_password"> New password </label>
        <input type="password" class="form-control col" name ="new_password" id="new_password" >

        @if($errors->has('new_password'))
        <p class="text-danger"> {{$errors->first('new_password')}} </p>
        @endif
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="new_password_confirmation"> Confirm Password</label>
        <input type="password" class="form-control col" name ="new_password_confirmation" id="new_password_confirmation">
        @if($errors->has('new_password_confirmation'))
        <p class="text-danger"> {{$errors->first('new_password_confirmation')}} </p>
        @endif


    </div>
</div>


<div class="alert col-md-6">
    <button type="submit" class="btn btn-info float-right"> Update details </button>
</div>
</form>

@endsection

