@component('mail::message')
# Introduction

Bienvenue, {{$mail->name}}!
Nous traitons votre demande rapidement.


Thanks,<br>
{{ config('app.name') }}
@endcomponent