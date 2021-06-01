@component('mail::message')
# Introduction

Bienvenue, {{$mail->email}}!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent