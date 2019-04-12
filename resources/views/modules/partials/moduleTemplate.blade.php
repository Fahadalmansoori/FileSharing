<div class="accordion round-left" id="accordionExample">
    <div class="card">
        <div class="card-header " id="heading">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#module{{$module->id}}" aria-expanded="true" aria-controls="{{$module->id}}">
                    <a class="card-title text-info" href="{{route('module.page',$module)}}"> <span class="card-title text-info ">{{$module->title}}
                            <span class=" badge badge-info ml-2 ">Year : {{$module->year}}</span>
                        </span><i class="fas fa-angle-double-down ml-2 pt-4 text-info"></i> </a>
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
                    <li class="nav-item">
                        <a class="nav-link  text-info" id="module-tab" data-toggle="tab" href="#year3-{{$module->id}}" role="tab" aria-controls="module" aria-selected="false">Year 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-info" id="module-tab" data-toggle="tab" href="#year4-{{$module->id}}" role="tab" aria-controls="module" aria-selected="false">Year 4</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  text-info" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="about{{$module->id}}" role="tabpanel" aria-labelledby="About">{{$module->about}}</div>
                    <div class="tab-pane fade" id="year1-{{$module->id}}" role="tabpanel" aria-labelledby="module-tab"> Total Mark : {{$module->total_mark}}</div>

                    <div class="tab-pane fade" id="year2-{{$module->id}}" role="tabpanel" aria-labelledby="module-tab">Assignments</div>

                    <div class="tab-pane fade" id="year3-{{$module->id}}" role="tabpanel" aria-labelledby="module-tab">Year 3</div>

                    <div class="tab-pane fade" id="year4-{{$module->id}}" role="tabpanel" aria-labelledby="module-tab">Year 4</div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
    </div>

</div>
