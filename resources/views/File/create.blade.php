
@extends('Account.Layouts.default')

@section('title', 'Sell file')


@section('Account.content')
<div class="p-5">
    <h2 class="text-center text-info font-weight-bold"> Your assignment details </h2>


    <form class="needs-validation" method="post" action="{{route('file.store')}}" novalidate>
        {{ csrf_field() }}
        <!-- file uplaod dropzonbe  -->
             @include('File.templates.createFileTemplate');
   </form>

</div>

@endsection

