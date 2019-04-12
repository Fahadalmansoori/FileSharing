@extends('adminSuper.layouts.default')

@section('title','Super Admin')

@section('adminSuper.content')

@if(Auth::user()->hasRole('Super_Admin'))


<p class=" text-center"> Welcome : {{Auth::user()->first_name}} {{Auth::user()->last_name}}  </p>

<p class="text">
    @foreach(auth()->user()->roles as $role)
    Logged as : <span class="text-info">  {{ $role->name }} </span>
    @endforeach
</p>


@endif

@endsection
