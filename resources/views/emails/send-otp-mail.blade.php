@component('mail::message')
# Your OTP

Your One Time Password (OTP) is: {{ $otp }}

This OTP is valid for 5 minutes only.

Thanks,<br>
{{ config('app.name') }}
@endcomponent