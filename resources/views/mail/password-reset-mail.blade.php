@component('mail::message')
# Introduction

This is a Link to Password Reset Form

@component('mail::button', ['url' => 'http://127.0.0.1:8003/reset-password'])
Click here to proceed
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
