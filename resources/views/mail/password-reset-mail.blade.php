@component('mail::message')
# DAVIES PRESSURE WASHING

Good Day, a password reset was requested from this email
 {{ $user[0]['email'] }} from your Davie's PowerWash account 

@component('mail::button', ['url' => "http://127.0.0.1:8003/reset-password"])
Click here to reset password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
