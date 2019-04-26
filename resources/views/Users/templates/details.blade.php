<table class="table table-borderless">

  <tbody>
    <tr class="text-info">
      <th scope="row">Name:</th>
      <td>{{$user->getFullName()}}</td>
      <th scope="row">Student Number :</th>
      <td class="float-left"><span class="float-left"> {{$user->student_number}}</span></td>
    </tr>
    <tr class="text-info">
      <th scope="row">School:</th>
      <td>{{$user->school->name}}</td>
      <th scope="row">Course:</th>
      <td class="float-left"><span class="float-left"> {{$user->course->title}}</span></td>
    </tr>

  </tbody>
</table>
