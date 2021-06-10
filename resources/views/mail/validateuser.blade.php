@component('mail::message')
# Introduction

Bienvenue chez Labs, {{$mail->email}}!

Votre compte a été validé. 

Pour vous connecter, utilisez ce token dans votre URL : /qwerty

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent