    <!-- course Card -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('school.courses',$school)}}">{{$school->name}}</a></li>
            <li class="breadcrumb-item"><a href="{{route('course.page',$course)}}">{{$course->title}}</a></li>
            <li class="breadcrumb-item text-info active" aria-current="page">{{$module->title}}</li>
        </ol>
    </nav>
    <div class="card mb-3">
        <span class="badge badge-info text-light"> <strong>Part of Course:</strong> {{$module->course->title}} <span class="badge badge-light ml-3 p-2"> Year {{$module->year}}</span></span>
        @include('courses.partials.courseTemplate')
    </div>

    <div class="card-columns">

        <!-- total mark Card -->
        <div class="card bg-light text-info text-center p-3">
            <blockquote class="blockquote mb-0 ">
                <strong>Part of School :</strong> <a href="{{route('school.courses',$school)}}" class="text-info">
                    {{$school->name}}
                </a>
                <a href="{{route('school.courses',$school)}}" class="btn btn-link float-right text-info"> View all Courses >></a>
            </blockquote>


        </div>


        <!-- Module Card -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title text-info text-center">About {{$module->title}} </h5>
            </div>
            <div class="card-body">

                <p class="card-text">{{$module->about}}</p>
                <span class="badge badge-info float-right"> Total Mark : {{$module->total_mark}} </span>
            </div>
        </div>



        <!-- School Card -->
        <div class=" ">
            <div class="card-header">
                <h5 class="card-title text-info text-center">Top Assignments </h5>
            </div>


                @if (!$files->count())
                <p class="text-center"> This module has no assignments yet </p>
                @else
@foreach($files as $file)

@include('File.partials.fileTemplate')

@endforeach

@endif

        </div>


    </div>
