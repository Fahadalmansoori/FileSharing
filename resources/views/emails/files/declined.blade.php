@component('mail::message')
# Hello {{$user->getFullName()}}

We would like to inform you that  Your file <span class="text-info"> {{$file->title}} </span>has been declined  by {{$approval->getFullName()}}

@component('mail::button', ['url' => ''])
Go To your account
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent
