@extends('layouts.app')

@section('title','page')


@section('infobar')

<div class="jumbotron bg-info">

    <div class="row p-4">
        <div class="col-md-3 text-center"> <h5 class="text-bold"> <strong>Total assignments</h5></strong>
        <h4 class="text-white"> {{auth()->user()->files->count()}} Files </h4>

            </div>
            <div class="col-md-3 text-center"> <h5 class="text-bold"> <strong>Approved assignments</h5></strong>
                    <h4 class="text-white"> {{auth()->user()->files()->Approved()->get()->count()}} Files </h4>

            </div>
            <div class="col-md-3 text-center"> <h5 class="text-bold"> <strong>Rejected assignments</h5></strong>
                <h4 class="text-white"> {{auth()->user()->files()->declined()->get()->count()}} Files </h4>

            </div><div class="col-md-3 text-center"> <h5 class="text-bold"> <strong>Pending assignments</h5></strong>
                    <h4 class="text-white"> {{auth()->user()->files()->pending()->get()->count()}} Files </h4>

            </div>

    </div>


</div>

@endsection
@section('content')

<div class="row p-1">

    <div class="col-md-3 border">
        @include('Account.layouts.sideNav')

    </div>

    <div class="col-md-9 card ">
        @yield('Account.content')
    </div>

</div>

@endsection
