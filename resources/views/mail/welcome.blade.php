@component('mail::message')
# Introduction

Bienvenue chez Labs, {{$mail->email}}!

Votre compte est en attente de validation.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent