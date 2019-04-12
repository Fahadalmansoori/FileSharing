@component('mail::message')
# Hello {{$user->getFullName()}}

Good news, Your file <span class="text-info"> {{$file->title}} </span>has been approved by {{$approval->getFullName()}}

@component('mail::button', ['url' => ''])
Go To your account
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
