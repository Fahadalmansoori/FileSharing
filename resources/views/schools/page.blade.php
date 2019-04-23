@extends('layouts.app')

@section('title' , 'School')

@section('content')
{{$courses->links()}}

<div class="alert">
    <p class="text-info">
{{$school->about}}
</p>
</div>

@if (!$courses->count())
" No Courses to show "
@else
<h3 class="text-info text-center card-title">   {{$school->name}} School



    @foreach($courses as $course)
</h3>
@include('courses.partials.courseTemplate')
@endforeach

@endif

@endsection
