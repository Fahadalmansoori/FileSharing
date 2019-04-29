<div class="accordion" id="accordionExample">
  <div class="card mb-2">
    <div class="card-header" id="headingOne">
      <span class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$file->id}}" aria-expanded="false" aria-controls="collapseOne">
        <span class="text-info float-left">Assignment : {{$file->title}} </span>

        </button>

        <span class="badge float-right badge-{{$file->status()== 'Approved' ? 'success' : 'warning'}}"> {{ $file->status()}}</span>
        @if($file->status() =='Approved')
        <span class="badge float-right badge-info mr-2"> Downloaded : {{ $file->downloads->count()}} times</span>
        @endif
</span>
    </div>

    <div id="collapseOne{{$file->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">

      <table class="table">

  <tbody>
    <tr>
      <th scope="row">Upladed by: </th>
      <td> {{$file->user->getFullName()}}</td>
      <th> Uploaded at :</th>
      <td>{{ $file->created_at->diffForHumans()}}</td>
    </tr>
    <tr>
      <th scope="row">Module:</th>
      <td> {{$file->module->title}}( Year {{$file->module->year}})</td>
      <th>Course:</th>
      <td> {{$file->module->course->title}} </td>
    </tr>
    <tr>
      <th scope="row">School :</th>
      <td> {{$school->name}}</td>
      <th>Assignment mark: </th>
      <td>  {{$file->mark}}/{{$file->module->total_mark}} </td>
    </tr>
    <tr>
@if(auth()->user()->hasRole('Tutor'))
      <td> <a target="_blank" href="{{route('upload.review',$file)}}" class="btn btn-outline-info"> View assignment </a> </td>
      <td></td>
@endif

@if(auth()->user()->owner($file))

      <td><a  href="{{route('file.edit', $file)}}" class="btn btn-outline-info"> Edit my assignment </a></td>
@endif


      <td><a  href="{{route('file.request', $file)}}" class="btn btn-outline-info">  Download Assignment </a></td>

    </tr>

  </tbody>
</table>
      </div>
      <div class="card-footer ">
<div class="alert">
      @if(!$file->approved && auth()->user()->hasRole('Tutor'))
       <a href="{{route('file.approve',$file)}}" class="btn btn-outline-info float-right"  > Approve </a>
      @elseif($file->approved)

      <span class="float-right">
     <strong >   {{ $file->approved ? 'Approved ' : 'Declined '}}   By: </strong>

      <span class="text-info ">
           {{$file->approved_by == Auth::user()->id && $file->
            approved ? ' You' : $file->approval()->getFullName() }}
          </span> |  {{$file->updated_at->diffForHumans()}}  </span>
      @endif
      @if( auth()->user()->hasRole('Tutor') && $file->finished == false)
      <a href="{{route('file.decline', $file)}}" class="btn btn-outline-danger float-left"> Decline </a>
      @endif
      </div>
      </div>
    </div>
  </div>



</div>

