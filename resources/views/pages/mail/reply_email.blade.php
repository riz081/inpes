@component('mail::message')

# Hi {{ $name }},
{{-- # {{ $senderMessage }} --}}


Receive  your email. I will try quickly answer.

Thanks,

{{ config('app.name') }}
@endcomponent
