

        <div class="row">
            <div class="form-group col-md-6">
                <label for="title">Your Course </label>
                <input type="text" class="form-control" value="{{$course->title}}" disabled>
            </div>
        </div>

        <div class="row">


            <div class="form-group col-md-6">
                <label for="price">Modules</label>
                <select name="moduleid" id="moduleid" class="form-control">
                    <option value=""> Select Module</option>
                    @if(!$modules->count())
                    <option value=""> No Modules to show </option>
                    @else

                    @foreach($modules as $module )

                    <option value="{{$module->id}}" name = "module"  {{old('moduleid')== $module->id ? ' Selected' : ''}} >{{$module->title}}
                    <span class="badge badge-info float-right">(Year{{$module->year}}) </span> </option>
                    @endforeach


                    @endif

                </select>

                @if ($errors->has('moduleid') )
                <p class="text-danger"> {{$errors->first('moduleid')}} </p>
                @endif

            </div>

            <div class="form-group col-md-6">
                <label for="mark">Mark</label>
                <input type="text" class="form-control {{$errors->has('mark')? ' is-invalid' : ' '}}" id="mark" name="mark" placeholder="The marks you got for this assignment" value="{{old('mark')}}">
                @if ($errors->has('mark') )
                <p class="text-danger"> {{$errors->first('mark')}} </p>
                @endif
            </div>

        </div>


        <div class="form-group ">
            <label for="about">About </label>

            <textarea class="form-control {{$errors->has('about')? ' is-invalid' : ' '}}" id="about" name="about" cols="30" rows="5" value="{{old('about')}}">{{old('about') }}

            </textarea>
            @if ($errors->has('about') )
            <p class="text-danger"> {{$errors->first('about')}} </p>
            @endif
        </div>


        <div class="form-group ">
            <div class="row">
            <div class="form-check col ">
                <input class="form-check-input " type="checkbox" id="gridCheck" name="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    I am the owner of this file.
                </label>
                @if ($errors->has('gridCheck') )
                <p class="text-danger"> You must be the owner and have the right to upload this file </p>
                @endif
            </div>
            <div class="form-check col">
                <input class="form-check-input " type="checkbox" id="academic" name="academic">
                <label class="form-check-label" for="academic">
                    I have read the  Academic Integrity and i am not breaching it.
                </label>
                @if ($errors->has('gridCheck') )
                <p class="text-danger"> You must confirm that you are not breaching the Academic integrity </p>
                @endif
            </div>
            </div>
        </div>
        <button type="submit" class="btn btn-secondary btn-lg btn-block  text-info mb-5  rounded"> Continue >> </button>

