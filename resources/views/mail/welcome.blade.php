@component('mail::message')
# Introduction

Bienvenue chez Labs, {{$mail->email}}!

Pour vous connecter, utilisez ce token dans votre URL : /azerty

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent