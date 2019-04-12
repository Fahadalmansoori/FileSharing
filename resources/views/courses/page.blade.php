@extends('layouts.app')

@section('title' , 'All Courses')

@section('content')
@if (!$course)
" No Course to show "
@else
<h3 class="text-info text-center card-title">
    {{$course->title}}
</h3>
@include('courses.partials.courseTemplate')

@endif

@endsection
