@component('mail::message')
# Introduction
{{-- # = header  --}}
- The body of your message.
- Ini Mail mu
{{-- - markdown --}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
