@extends('Account.layouts.default')

@section('title','Your files')

@section('Account.content')
@if(!$files->count())
<div class="mt-5">
    <h4 class="test-center">No files to show </h4>
</div>
@else
<div>
@foreach($files as $file)
    @include('File.partials.fileTemplate')
    @endforeach
</div>
@endif
@endsection
