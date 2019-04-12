@extends('Account.Layouts.default')

@section('title', 'upload')


@section('Account.content')
<div class="p-5">
    <h2 class="text-center text-info font-weight-bold"> Upload  Assignment </h2>

    <form class="needs-validation" method="post" action="{{route('file.submitAll',$file)}}" >
        {{ csrf_field() }}
        <!-- file uplaod dropzonbe  -->

@include('File.templates.create_uploadTemplate')
</form>

</div>


@endsection
@section('scripts')
  @include('File.templates.DropZone')
@endsection

