@extends('adminSuper.layouts.default')

@section('title','Super Admin')

@section('adminSuper.content')

@if(Auth::user()->hasRole('Super_Admin'))

<form action="" method="post">

@foreach($roles as $role)

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" aria-label="Checkbox for following text input">
    </div>
  </div>
  <input type="text" class="form-control" aria-label="Text input with checkbox">
</div>
@endforeach
</form>


@endif

@endsection
