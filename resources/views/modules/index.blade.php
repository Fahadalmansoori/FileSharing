@extends('layouts.app')

@section('title' , 'All modules')

@section('content')
@if (!$modules->count())
" No modules to show "
@else
<h3 class="text-info text-center card-title"> Modules in course {{$modules->first()->course->title}}
    {{$modules->links()}}
    @foreach($modules as $module)
</h3>
@include('modules.partials.moduleTemplate')
@endforeach

@endif

@endsection
