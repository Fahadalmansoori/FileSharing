@extends('layouts.app')

@section('title','Admin Dashboard ')


@section('infobar')
<div class="jumbotron bg-info">

    <div class="row p-4">

            <div class="col-md-3 text-center"> <h5 class="text-bold"> <strong>You approved </h5></strong>
                    <h4 class="text-white"> {{auth()->user()->files()->Approvedby(auth()->user())->get()->count()}} assignments </h4>

            </div>

            <div class="col-md-3 text-center"> <h5 class="text-bold"> <strong>You declined </h5></strong>
        <h4 class="text-white">  {{auth()->user()->files()->Declinedby(auth()->user())->get()->count()}} assignments </h4>

            </div>
            <div class="col-md-3 text-center"> <h5 class="text-bold"> <strong>You  uploaded</h5></strong>
                <h4 class="text-white"> {{auth()->user()->files()->count()}} assignments </h4>

            </div><div class="col-md-3 text-center"> <h5 class="text-bold"> <strong>Pending assignments</h5></strong>
                    <h4 class="text-white"> {{auth()->user()->files()->pending()->get()->count()}} Files </h4>

            </div>

    </div>


</div>
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
