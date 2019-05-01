<div class="accordion round-left" id="accordionExample">
    <div class="card">
        <div class="card-header " id="heading">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#module{{$module->id}}" aria-expanded="true" aria-controls="{{$module->id}}">
                   <span class="card-title text-info ">{{$module->title}}
                            <span class=" badge badge-info ml-2 ">Year : {{$module->year}}</span>
                        </span><i class="fas fa-angle-double-down ml-2 pt-4 text-info"></i>
                </button>
            </h2>
        </div>

        <div id="module{{$module->id}}" class="collapse" aria-labelledby="heading" data-parent="#accordionExample">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link  text-info active" id="About" data-toggle="tab" href="#about{{$module->id}}" role="tab" aria-controls="about{{$module->id}}" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-info" id="module-tab" data-toggle="tab" href="#year1-{{$module->id}}" role="tab" aria-controls="module" aria-selected="false">Total Marks</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  text-info" id="module-tab" data-toggle="tab" href="#year2-{{$module->id}}" role="tab" aria-controls="module" aria-selected="false">Assignments</a>
                    </li>



                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="about{{$module->id}}" role="tabpanel" aria-labelledby="About">{{$module->about}}

                    <a class="btn btn-outline-info float-right m-3" href="{{route('module.page',$module)}}"> More details  </a>
                    </div>
                    <div class="tab-pane fade" id="year1-{{$module->id}}" role="tabpanel" aria-labelledby="module-tab"> Total Mark : {{$module->total_mark}}</div>

                    <div class="tab-pane fade" id="year2-{{$module->id}}" role="tabpanel" aria-labelledby="module-tab">

                    @if (!$module->files->count())
                            <p class="text-center"> This module has no assignments yet </p>
                            @else
                            @foreach($module->files as $file)

                                <a href="{{route('file.page',$file)}}">{{ $file->title}}</a>

                            @endforeach

                            @endif


                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
