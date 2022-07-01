@component('mail::message')
# Introduction

Thanks for writing us, we will get back to you ASAP.

Name: {{$message->full_name}}
Email: {{$message->email}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
