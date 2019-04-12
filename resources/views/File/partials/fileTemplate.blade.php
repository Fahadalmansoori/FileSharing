<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <span class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$file->id}}" aria-expanded="false" aria-controls="collapseOne">
        <span class="text-info float-left">Assignment : {{$file->title}} </span>

        </button>

        <span class="badge float-right badge-{{$file->status()== 'Approved' ? 'success' : 'warning'}}"> {{ $file->status()}}</span>
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
      <td> {{$file->module->title}}</td>
      <th>Year:</th>
      <td>  {{$file->module->year}}</td>
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



      @if(!$file->approved && auth()->user()->hasRole('Tutor'))
      <td> <a href="{{route('file.approve',$file)}}" class="btn btn-outline-info "  > Approve </a> </td>
      @elseif($file->approved)
      <th>   {{ $file->approved ? 'Approved ' : 'Declined '}}   By: </th>

      <td><span class="text-info">
           {{$file->approved_by == Auth::user()->id && $file->
            approved ? ' You' : $file->approval()->getFullName() }}
          </span> |  {{$file->updated_at->diffForHumans()}}</td>
      @endif
      @if( auth()->user()->hasRole('Tutor') && $file->finished == false)
      <td>  <a href="{{route('file.decline', $file)}}" class="btn btn-outline-danger"> Decline </a> </td>
      @endif
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>



</div>

