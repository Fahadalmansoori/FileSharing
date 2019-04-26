@extends('Account.layouts.default')

@section('title', 'My details')

@section('Account.content')
<div class="alert">
@include('Users.templates.details')
</div>
@endsection
