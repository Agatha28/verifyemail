@component('mail::message')
# Terima Kasih Mengunjungi Situs Kami

Percobaan Pengiriman Email Dari Laravel 

@component('mail::button', ['url' => ''])
Ok
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
