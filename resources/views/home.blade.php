@extends('layouts.app')

@section('title','home')


@section('content')

@auth
<p class="text">
Logged as :  @foreach(auth()->user()->roles as $role)
    <span class="text-info">  {{ $role->name }} |</span>
    @endforeach

</p>
@endauth

<div class="col-md-8 offset-md-2 pt-4">
    <p class="text-info">
        How it works:
        <ol class="text-info">
            <li> Type the module name in the search box.</li>
            <li> From the results, select the moudle,the course or the school link. </li>
            <li> Select the assignment to download. </li>
        </ol>
    </p>
    <div class="row mx-md-n5">
        <div class="col px-md-5">
            <div class="p-3 border bg-light">
                <search-component> </search-component>
            </div>
        </div>
    </div>
</div> @endsection
