@component('mail::message')
# Introduction

Mon tout premier message mailto

@component('mail::button', ['url' => ''])
envoyen le email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
