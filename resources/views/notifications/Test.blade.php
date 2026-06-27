@if ($setupCompleted = \App\Models\Setting::setupCompleted())
@component('mail::message')
@endif

{{ trans('mail.test_mail_text') }}

Thanks,
ITBuddy
@if ($setupCompleted)
@endcomponent
@endif
