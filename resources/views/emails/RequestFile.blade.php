@component('mail::message')
Hello {{$user->getFullName()}}


 Your have requested to  download the  assignment  <span class="text-info"> {{$file->title}} </span>. please click on the link below to download it.
 <div class="alert alert-warning"> <p class="text-center alert alert-warning"> Please use the assignment as a reference and dont breach the academic integrity  </p>
<p> <a  href="https://www.hud.ac.uk/registry/regulations-and-policies/studentregs/" class=" btn btn-outline-wraning">  Read the Academic Integrity </a>


</p>
</div>
@component('mail::button', ['url' => route('upload.download', $file)])
Download assingnment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent



