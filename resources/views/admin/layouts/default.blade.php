@extends('layouts.app')

@section('title','Admin Dashboard ')


@section('infobar')
<h3 class="text-info  text-center"> info Bar </h3>
@endsection
@section('content')

<div class="row p-1">

    <div class="col-md-3 border">
        @include('admin.layouts.sideNav')

    </div>

    <div class="col-md-9 card ">
        @yield('admin.content')
    </div>

</div>

@endsection
