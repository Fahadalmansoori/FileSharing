@extends('adminSuper.layouts.default')

@section('title','Super Admin')

@section('adminSuper.content')



@if(!$courses->count())
<p class="text-info text-center"> No courses to show</p>
@else
<div class="alert">{{$courses->links()}}
<p class="text-info text-center"> All courses list</p>
</div>
@foreach($courses as $course)
@include('courses.partials.courseTemplate')

@endforeach

@endif


@endsection
