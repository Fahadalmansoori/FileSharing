    <!-- course Card -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">

            <li class="breadcrumb-item "><a class="" href="{{route('course.page',$course)}}">{{$course->title}}</a></li>
            <li class="breadcrumb-item text-info active" aria-current="page">{{$module->title}}</li>
        </ol>
    </nav>

<div class="card-columns">



        <!-- Owner Card -->
        <div class="card ">
            <div class="card-header text-center">
<h5 class="card-title "><strong class="text-info">Uploaded by: </strong>
           {{$owner->first_name}} {{$owner->last_name}}</h5>

        </div>
            <div class="card-body">

<p class=""><strong class="text-info"> Student/Staff Number:</strong> {{$owner->student_number}} </p>

<p class=""><strong class="text-info"> Email: </strong> {{$owner->email}} </p>

            </div>
            <div class="card-footer">
 <small class="text-muted float-left font-weight-bold">Uploaded : {{ $file->created_at->diffForHumans() }}</small>
            </div>
        </div>
       <!-- Module Card -->
        <div class="card ">
            <div class="card-header text-center">
<h5 class="card-title "><strong class="text-info">Mark Achieved :  </strong>
        <span class="badge badge-light"> {{$file->mark}} / {{$module->total_mark}} </span></h5>

        </div>
            <div class="card-body">

<p class=""><strong class="text-info"> Student/Staff Number:</strong> {{$owner->student_number}} </p>

<p class=""><strong class="text-info"> Email: </strong> {{$owner->email}} </p>

            </div>
            <div class="card-footer">
            <a href="#" class="btn btn-info float-left"> Download </a>

            <a href="#" class="btn btn-info float-right"> Approve </a>
            </div>
        </div>







  </div>
