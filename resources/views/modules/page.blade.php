@extends('layouts.app')

@section('title' , 'All modules')

@section('content')
@if (!$module->count())
" No module to show "
@else
<h3 class="text-info text-center card-title"> Module : {{$module->title}}
    <!-- {{$files->links()}} -->
</h3>
@include('modules.partials.moduleDetails')

@endif

@endsection

