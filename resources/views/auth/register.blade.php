@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Your School: ') }}
                    <span class="text-info"> {{$school->name}}</span>
                    <a href="{{ route('register')  }}" class="btn btn-outline-info float-right">
                        {{__('<< Change School') }}
                    </a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required>

                                @if ($errors->has('lname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="student_number" class="col-md-4 col-form-label text-md-right">{{ __('Student Number ') }}</label>

                            <div class="col-md-6">
                                <input id="student_number" type="text" class="form-control{{ $errors->has('student_number') ? ' is-invalid' : '' }}" name="student_number" value="{{ old('student_number') }}" required autofocus>

                                @if ($errors->has('student_number'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('student_number') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" value="{{$school->id}}" name="school" id="school">

                        <div class="form-group row">
                            <label for="Course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <select class=" form-control{{ $errors->has('course') ? ' is-invalid' : '' }}" name="course" id="course" data-dependent="school">

                                    <option value="" class="btn  disabled"> Select your course </option>

                                    @if($courses)
                                    @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->title}}</option>
                                    @endforeach
                                    @endif
                                </select>

                                @if ($errors->has('course'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('course') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info float-right">
                                    {{ __('Register >>') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
