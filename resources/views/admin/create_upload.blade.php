@extends('admin.layouts.default')

@section('title','Admin')

@section('admin.content')
<div class="p-5">
    <h2 class="text-center text-info font-weight-bold"> Upload  Assignment </h2>

 <form class="needs-validation" method="post" action="{{route('admin.submitAll',$file)}}" >
        {{ csrf_field() }}

        <!-- file uplaod dropzonbe  -->
@include('File.templates.create_uploadTemplate')
</form>

</div>


@endsection

@section('scripts')
  @include('File.templates.DropZone')
@endsection
