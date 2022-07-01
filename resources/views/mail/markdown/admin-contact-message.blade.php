@component('mail::message')
# Introduction

You received a new message from {{$message->full_name}}

Subject: {{$message->subject}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
