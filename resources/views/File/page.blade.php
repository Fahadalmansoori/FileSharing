@extends('layouts.app')

@section('title' , 'Assignment details ')

@section('content')
@if (!$file->count())
" No Data  to show "
@else
<h3 class="text-info text-center card-title"> Assignment  : {{$file->title}}

</h3>
@include('File.partials.fileDetails')

@endif

@endsection
