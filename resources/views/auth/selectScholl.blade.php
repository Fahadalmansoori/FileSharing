  @extends('layouts.app')

  @section('content')
  <form action="{{route('signup')}}" method="get">
      @csrf
      <div class="form-group row">
          <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('School') }}</label>

          <div class="col-md-6">
              <select class="dynamic form-control{{ $errors->has('school') ? ' is-invalid' : '' }}" name="school" id="school">

                  <option value="">Select your school</option>

                  @foreach($schools as $school )
                  <option value="{{$school->id}}"> {{$school->name}} </option>
                  @endforeach
              </select>

              @if ($errors->has('school'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('school') }}</strong>
              </span>
              @endif
          </div>

      </div>
      <div class="form-group alert">
          <button class="btn btn-info float-right">continue >></button>
      </div>
  </form>
  @endsection
