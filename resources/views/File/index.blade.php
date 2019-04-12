
@extends('Account.layouts.default')

@section('title','Your files')

@section('Account.content')
@if(!$files->count())
<div class="mt-5">
<h4 class="test-center">No files to  show  </h4>
</div>
@else
<div>

    @include('File.partials.fileTemplate')
</div>
@endif
@endsection
