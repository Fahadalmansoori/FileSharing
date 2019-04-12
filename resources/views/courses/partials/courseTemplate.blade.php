<div class="accordion round-left" id="accordionExample">
    <div class="card">
        <div class="card-header " id="heading">
            <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#course{{$course->id}}" aria-expanded="true" aria-controls="{{$course->id}}">
                    <span class="card-title text-info ">{{$course->title}}</span><i class="fas fa-angle-double-down ml-2 pt-4 text-info"></i>
                </button>
            </h2>
        </div>

        <div id="course{{$course->id}}" class="collapse" aria-labelledby="heading" data-parent="#accordionExample">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="About" data-toggle="tab" href="#about{{$course->id}}" role="tab" aria-controls="about{{$course->id}}" aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" id="module-tab" data-toggle="tab" href="#year1-{{$course->id}}" role="tab" aria-controls="module" aria-selected="false">
                            Year 1 modules
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-info" id="module-tab" data-toggle="tab" href="#year2-{{$course->id}}" role="tab" aria-controls="module" aria-selected="false">Year 2 modules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" id="module-tab" data-toggle="tab" href="#year3-{{$course->id}}" role="tab" aria-controls="module" aria-selected="false">Year 3 modules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-info" id="module-tab" data-toggle="tab" href="#year4-{{$course->id}}" role="tab" aria-controls="module" aria-selected="false">Year 4 modules</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-info" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="about{{$course->id}}" role="tabpanel" aria-labelledby="About">{{$course->about}}</div>
                    <div class="tab-pane fade" id="year1-{{$course->id}}" role="tabpanel" aria-labelledby="module-tab">

                        @if(!$course->modules()->year1()->get()->count())
                        <p class="test-info">No modules to show</p>

                        @else
                        @foreach($course->modules()->year1()->get() as $module)
                        @include('modules.partials.moduleTemplateSimple')
                        @endforeach
                        @endif
                    </div>

                    <div class="tab-pane fade" id="year2-{{$course->id}}" role="tabpanel" aria-labelledby="module-tab">

                        @if(!$course->modules()->year2()->get()->count())
                        <p class="test-info">No modules to show</p>

                        @else
                        @foreach($course->modules()->year2()->get() as $module)
                        @include('modules.partials.moduleTemplateSimple')
                        @endforeach
                        @endif


                    </div>

                    <div class="tab-pane fade" id="year3-{{$course->id}}" role="tabpanel" aria-labelledby="module-tab">
                        @if(!$course->modules()->year3()->get()->count())
                        <p class="test-info">No modules to show</p>

                        @else
                        @foreach($course->modules()->year3()->get() as $module)
                        @include('modules.partials.moduleTemplateSimple')
                        @endforeach
                        @endif

                    </div>

                    <div class="tab-pane fade" id="year4-{{$course->id}}" role="tabpanel" aria-labelledby="module-tab">

                        @if(!$course->modules()->year4()->get()->count())
                        <p class="test-info">No modules to show</p>

                        @else
                        @foreach($course->modules()->year4()->get() as $module)
                        @include('modules.partials.moduleTemplateSimple')
                        @endforeach
                        @endif

                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
    </div>

</div>
