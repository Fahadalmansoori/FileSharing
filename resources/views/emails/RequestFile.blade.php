@component('mail::message')
Hello {{$user->getFullName()}}

 Your have requested to  download the  assignment  <span class="text-info"> {{$file->title}} </span>. please click on the link below to download it.

@component('mail::button', ['url' => route('upload.download', $file)])
Download assingnment
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
