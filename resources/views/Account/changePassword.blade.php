@extends('Account.layouts.default')

@section('title', 'update details')

@section('Account.content')

<form action="{{route('account.update', Auth()->user())}}" method="post" class="m-2">
@csrf

<div class="form-row">
        <div class="form-group col-md-6">
        <label for="opassword"> Old Password</label>
        <input type="password" class="form-control col" name ="opassword" id="opassword">
        @if($errors->has('opassword'))
        <p class="text-danger"> {{$errors->first('opassword')}} </p>
        @endif


</div>
</div>

<div class="form-row">


        <div class="form-group col-md-6 ">
        <label for="nPassword"> New password </label>
        <input type="password" class="form-control col" name ="nPassword" id="nPassword" >

        @if($errors->has('nPassword'))
        <p class="text-danger"> {{$errors->first('nPassword')}} </p>
        @endif
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
        <label for="cpassword"> Confirm Password</label>
        <input type="password" class="form-control col" name ="cpassword" id="cpassword">
        @if($errors->has('cpassword'))
        <p class="text-danger"> {{$errors->first('cpassword')}} </p>
        @endif


    </div>
</div>


<div class="alert col-md-6">
    <button type="submit" class="btn btn-info float-right"> Update details </button>
</div>
</form>

@endsection

