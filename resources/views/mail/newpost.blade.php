@component('mail::message')
# Introduction

Il y a un nouveau poste! 

Jettez-y un coup d'oeil sur labs.com 

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent