@extends('admin.layouts.default')

@section('title','Admin')

@section('admin.content')

@if(Auth::user()->hasRole('Admin'))


<p class=" text-center"> Welcome : {{Auth::user()->first_name}} {{Auth::user()->last_name}} </p>


@endif
@endsection
