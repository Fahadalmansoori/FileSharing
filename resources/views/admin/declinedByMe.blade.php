@extends('admin.layouts.default')

@section ('title', 'Approved by me ')

@section ('admin.content')

@if(!$files->count())
<p class="text-info text-center"> You have not declined any assignments  </p>
@else
@foreach($files as $file)

@include('File.partials.fileTemplate')
@endforeach


@endif


@endsection
