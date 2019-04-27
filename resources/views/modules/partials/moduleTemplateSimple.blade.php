<div class="card ">
    <div class="card-header">
        <a class="text-info float-left" href="{{route('module.page',$module)}}"> <span class="card-title "> {{$module->title}}</span></a>
        <span class="card-title badge badge-info pl-2 pl-2 float-left ml-3">Total marks: {{$module->total_mark}} </span>
        <a href="{{route('module.page',$module)}}" class="btn btn-info float-right"> View Assignments </a>

    </div>

</div>
