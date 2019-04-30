@extends('adminSuper.layouts.default')

@section('title','Super Admin')

@section('adminSuper.content')



@if(!$modules->count())
<p class="text-info text-center"> No modules to show</p>
@else
<div class="alert"> {{$modules->links()}}

<p class="text-info text-center"> All modules list</p>
</div>
@foreach($modules as $module)
@include('modules.partials.moduleTemplate')

@endforeach

@endif


@endsection
