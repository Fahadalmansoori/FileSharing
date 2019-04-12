@extends('layouts.app')

@section('title' , 'All Courses')

@section('content')
@if (!$courses->count())
" No Courses to show "
@else
<h3 class="text-info text-center card-title"> Courses in School {{$courses->first()->school->name}}
    {{$courses->links()}}
    @foreach($courses as $course)
</h3>
@include('courses.partials.courseTemplate')
@endforeach

@endif

@endsection
