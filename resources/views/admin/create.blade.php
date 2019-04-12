
@extends('admin.layouts.default')

@section('title','Admin')

@section('admin.content')

<div class="p-5">
    <h2 class="text-center text-info font-weight-bold"> Your assignment details </h2>

    <form class="needs-validation" method="post" action="{{route('admin.store')}}" novalidate>
        {{ csrf_field() }}
        <!-- file uplaod dropzonbe  -->

       @include('File.templates.createFileTemplate');

    </form>
</div>

@endsection

