@component('mail::message')
# Introduction

Bienvenue, {{$mail->name}}!
Votre email est : {{$mail->mail}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent